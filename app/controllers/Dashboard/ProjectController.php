<?php namespace Dashboard;

use \View;
use \Project;
use \Validator;
use \Input;
use \Redirect;
use \Session;
use \File;

class ProjectController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = array(
            'projects' => Project::withTrashed()->paginate()
        );

        return View::make('dashboard.project.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('dashboard.project.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'name' => 'required|unique:projects',
            'image' => 'image',
            'brief' => 'required',
            'description' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::action('Dashboard\ProjectController@create')
                ->withErrors($validator)
                ->withInput(Input::except('image'));
        }
        else
        {
            $project = new Project();
            $project->name =Input::get('name');
            $project->link =Input::get('link');

            if (Input::hasFile('image'))
            {
                // We're gonna move the image to the proper img dir in public
                $imageAssetPath = public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'projects';
                $image = Input::file('image');
                // Make sure to change the name of the image as well
                $image->move($imageAssetPath, $image->getClientOriginalName());

                // Set image to a url to the real image
                $project->image = asset('img/projects/'.$image->getClientOriginalName());
            }

            $project->brief =Input::get('brief');
            $project->description =Input::get('description');
            $project->save();

            Session::flash('message', 'New project was created!');

            return Redirect::action('Dashboard\ProjectController@index');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  Project  $project
     * @return Response
     */
    public function show($project)
    {
        return View::make('dashboard.project.show')->with('project', $project);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project
     * @return Response
     */
    public function edit($project)
    {
        return View::make('dashboard.project.edit')->with('project', $project);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Project  $project
     * @return Response
     */
    public function update($project)
    {
        $rules = array(
            'name' => 'required|unique:projects,name,'.$project->id,
            'new_image' => 'image',
            'brief' => 'required',
            'description' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::action('Dashboard\ProjectController@edit', $project->id)
                ->withErrors($validator)
                ->withInput(Input::except('new_image'));
        }
        else
        {
            $project->name =Input::get('name');
            $project->link =Input::get('link');

            if (Input::hasFile('new_image'))
            {
                // We're gonna move the image to the proper img dir in public
                $imageAssetPath = public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'projects';
                $image = Input::file('new_image');
                // Make sure to change the name of the image as well
                $image->move($imageAssetPath, $image->getClientOriginalName());

                if ($project->image !== null)
                {
                    $this->deleteProjectImage($project->image);
                }

                // Set image to a url to the real image
                $project->image = asset('img/projects/'.$image->getClientOriginalName());
            }
            else
            {
                $project->image = Input::get('image');
            }

            $project->brief =Input::get('brief');
            $project->description =Input::get('description');
            $project->save();

            Session::flash('message', $project->name.' was updated!');

            return Redirect::action('Dashboard\ProjectController@index');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project
     * @return Response
     */
    public function destroy($project)
    {
        $project->delete();

        Session::flash('message', $project->name.' was deleted.');

        return Redirect::action('Dashboard\ProjectController@index');
    }


    /**
     * Restore the specified trashed resource.
     *
     * @param  Project  $project
     * @return Response
     */
    public function restore($project)
    {
        $project->restore();

        Session::flash('message', $project->name.' was restored!');

        return Redirect::action('Dashboard\ProjectController@index');
    }


    /**
     * Deletes a projects image on disk.
     *
     * @param  string  $imageUrl
     * @return boolean
     */
    private function deleteProjectImage($imageUrl)
    {
        if (empty($imageUrl) OR ! is_string($imageUrl))
        {
            return false;
        }

        $imageAssetPath = public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'projects'.DIRECTORY_SEPARATOR;
        $parts = explode('/', $imageUrl);
        $oldImageName = array_pop($parts);
        $oldImagePath = $imageAssetPath.$oldImageName;

        if (File::exists($oldImagePath))
        {
            File::delete($oldImagePath);

            return true;
        }

        return false;
    }


}

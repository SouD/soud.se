@extends('layouts.master')

@section('styles')

@stop

@section('content')
  <div class="container projects">
    <?php $count = $projects->count(); $i = 0; ?>
    @foreach($projects as $project)
      <?php ++$i; ?>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
          <div class="well well-sm project">
            <div class="row">
              <div class="col-xs-12 visible-xs">
                <h1 class="project-name">{{ $project->name }}</h1>
                <p class="project-brief">{{ $project->brief }}</p>
              </div>
              <div class="col-xs-12 col-sm-5 col-md-5">
                @if($project->image !== NULL)
                  <img class="img-responsive project-image" src="{{ $project->image }}">
                @else
                  <img class="img-responsive project-image" src="holder.js/160x160/auto/textmode:exact">
                @endif
              </div>
              <div class="col-xs-12 col-sm-7 col-md-7 hidden-xs">
                <h1 class="project-name">{{ $project->name }}</h1>
                <p class="project-brief">{{ $project->brief }}</p>
              </div>
              <div class="col-xs-12">
                <p class="project-description">{{ $project->description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
        {{ $projects->links() }}
      </div>
    </div>
  </div>
@stop

@section('footer')
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
          <!-- Sou da yo, Sōda yo -->
          <p>&#12381;&#12358; &#12384; &#12424;</p>
        </div>
      </div>
    </div>
  </div>
@stop

@section('scripts')

@stop

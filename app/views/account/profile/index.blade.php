@extends('layouts.dashboard')

@section('sidebar')
  @include('account.sidebar')
@stop

@section('main')
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Profile <small>{{{ $user->email }}}</small></h1>
    @if(Session::has('message'))
      <div class="alert alert-success alert-dissmissable" role="alert">
        <button class="close" type="button" data-dismiss="alert">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
        <span class="sr-only">(success)</span>{{ Session::get('message') }}
      </div>
    @endif
    @if($errors->count() > 0)
      <div class="alert alert-danger alert-dissmissable" role="alert">
        <button class="close" type="button" data-dismiss="alert">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
        <ul class="list-unstyled">
          @foreach($errors->all() as $error)
            <li>
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">(error)</span>{{ $error }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Account</div>
          <div class="panel-body">
            {{ Form::model($user, array('route' => 'account.profile.update', 'class' => 'form-horizontal', 'role' => 'form')) }}
              <div class="form-group">
                {{ Form::label('email', 'Email', array('class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                  {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'disabled' => 'disabled')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('first_name')) has-error @endif">
                {{ Form::label('first_name', 'First name', array('class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                  {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First name')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('last_name')) has-error @endif">
                {{ Form::label('last_name', 'Last name', array('class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                  {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last name')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('phone')) has-error @endif">
                {{ Form::label('phone', 'Phone', array('class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                  {{ Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'Phone')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('company')) has-error @endif">
                {{ Form::label('company', 'Company', array('class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                  {{ Form::text('company', null, array('class' => 'form-control', 'placeholder' => 'Company')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('location')) has-error @endif">
                {{ Form::label('location', 'Location', array('class' => 'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                  {{ Form::text('location', null, array('class' => 'form-control', 'placeholder' => 'Location')) }}
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                  <button class="btn btn-primary" type="submit">Save</button>
                </div>
              </div>
            {{ Form::close() }}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Security</div>
          <div class="panel-body">
            {{ Form::model($user, array('route' => 'account.profile.update', 'class' => 'form-horizontal', 'role' => 'form')) }}
              <div class="form-group @if($errors->first('current_password')) has-error @endif">
                {{ Form::label('current_password', 'Current password', array('class' => 'col-sm-4 control-label')) }}
                <div class="col-sm-8">
                  {{ Form::password('current_password', array('class' => 'form-control', 'placeholder' => 'Current password', 'required')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('new_password')) has-error @endif">
                {{ Form::label('new_password', 'New password', array('class' => 'col-sm-4 control-label')) }}
                <div class="col-sm-8">
                  {{ Form::password('new_password', array('class' => 'form-control', 'placeholder' => 'New password', 'required')) }}
                </div>
              </div>
              <div class="form-group @if($errors->first('new_password_confirmation')) has-error @endif">
                {{ Form::label('new_password_confirmation', 'Confirm password', array('class' => 'col-sm-4 control-label')) }}
                <div class="col-sm-8">
                  {{ Form::password('new_password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm password', 'required')) }}
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                  <button class="btn btn-primary" type="submit">Save</button>
                </div>
              </div>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

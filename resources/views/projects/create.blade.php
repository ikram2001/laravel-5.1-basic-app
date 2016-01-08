@extends('layouts.app')
 
@section('content')

    <!-- Display Validation Errors -->
    @include('common.errors')
    
    <h2>Create Project</h2>
 
    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection
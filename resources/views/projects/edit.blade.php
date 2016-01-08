@extends('layouts.app')
 
@section('content')

    <!-- Display Validation Errors -->
    @include('common.errors')

    <h2>Edit Project</h2>
 
    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
    {!! Form::close() !!}
@endsection
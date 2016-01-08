<div class="form-group">
    {!! Form::label('name', 'Task Name: *') !!}
    {!! Form::text('name') !!}
</div>
 
<div class="form-group">
    {!! Form::label('slug', 'Task Slug: *') !!}
    {!! Form::text('slug') !!}
</div>
 
<div class="form-group">
    {!! Form::label('completed', 'Task Completed:') !!}
    {!! Form::checkbox('completed') !!}
</div>
 
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
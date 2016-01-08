<div class="form-group">
    {!! Form::label('name', 'Enter Project Name: *') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Enter Project Slug: *') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
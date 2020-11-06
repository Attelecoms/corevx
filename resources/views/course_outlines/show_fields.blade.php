<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $courseOutlines->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $courseOutlines->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $courseOutlines->course_id }}</p>
</div>

<!-- Course Title No Field -->
<div class="form-group">
    {!! Form::label('course_title_no', 'Course Title No:') !!}
    <p>{{ $courseOutlines->course_title_no }}</p>
</div>

<!-- Course Title Field -->
<div class="form-group">
    {!! Form::label('course_title', 'Course Title:') !!}
    <p>{{ $courseOutlines->course_title }}</p>
</div>

<!-- Duration Field -->
<div class="form-group">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $courseOutlines->duration }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{{ $courseOutlines->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $courseOutlines->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $courseOutlines->updated_at }}</p>
</div>


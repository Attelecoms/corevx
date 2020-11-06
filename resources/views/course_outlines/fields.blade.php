<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
{{--    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="course_id" id="category_id" style="height:40px; ">

        @foreach ($courses as $course)
            <option value="{{ $course->id}}">{{ $course->title}}</option>
        @endforeach

    </select>
</div>

<!-- Course Title No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_title_no', 'Course Title No:') !!}
    {!! Form::number('course_title_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_title', 'Course Title:') !!}
    {!! Form::text('course_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courseOutlines.index') }}" class="btn btn-default">Cancel</a>
</div>

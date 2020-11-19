<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

@if(Auth::user()->role_id<3)
    <!-- Admin Status Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('admin_status', 'Admin Status:') !!}
        {{--    {!! Form::number('admin_status', null, ['class' => 'form-control']) !!}--}}
        <select class="form-control" name="admin_status" id="admin_status" style="height:40px; ">

            <option value="1">On</option>
            <option value="0">Off</option>


        </select>
    </div>
@endif
<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {{--    {!! Form::text('category_id', null, ['class' => 'form-control']) !!}\--}}

    <select class="form-control" name="category_id" id="category_id" style="height:40px; ">

        @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name}}</option>
        @endforeach

    </select>
</div>



<!-- Sub Title Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    {!! Form::text('sub_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- About Instructor Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    {!! Form::textarea('about_instructor', null, ['class' => 'form-control']) !!}
</div>

<!-- Playlist Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    {!! Form::text('playlist_url', null, ['class' => 'form-control']) !!}
</div>
<!-- Promo Video Url Field -->
<div class="form-group col-sm-12 col-sm-6">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    {!! Form::text('promo_video_url', null, ['class' => 'form-control']) !!}
</div>
<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-12 col-sm-6">
    {!! Form::label('photo', 'Upload Course Photo:') !!}
{{--    {!! Form::file('photo',null, ['class' => 'form-control']) !!}--}}
    <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" required>
<a style="color: red;" >image should be of size 184 width and 125 height</a>
</div>



<!-- Creator Status Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('creator_status', 'Creator Status:') !!}--}}
{{--    {!! Form::number('creator_status', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group col-sm-6">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    {{--    {!! Form::number('admin_status', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="creator_status" id="creator_status" style="height:40px; ">

        <option value="1">On</option>
        <option value="0">Off</option>


    </select>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('typesofcourse', 'Course Status:') !!}
    {{--    {!! Form::number('admin_status', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="typesofcourse" id="typesofcourse" style="height:40px; ">

        <option value="Online course">Online course only</option>
        <option value="Inclass course">Inclass course only</option>
        <option value="Both(Inclass & Online course)">Both(Inclass & Online course)</option>


    </select>
</div>

<!-- What Will Students Learn Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('what_will_students_learn', 'What Will Students Learn:') !!}
    {!! Form::textarea('what_will_students_learn', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Students Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('target_students', 'Target Students:') !!}
    {!! Form::textarea('target_students', null, ['class' => 'form-control']) !!}
</div>

<!-- Requirements Field -->
<div class="form-group col-sm-12 col-lg-8">
    {!! Form::label('requirements', 'Requirements:') !!}
    {!! Form::textarea('requirements', null, ['class' => 'form-control']) !!}

</div>
{{--<div class="form-group col-sm-12 col-sm-6">--}}
{{--    {!! Form::label('course_calendar', 'Upload (image) Course Calendar:') !!}--}}
{{--    {!! Form::file('course_calendar',null, ['class' => 'form-control']) !!}--}}
{{--    <input type="file" id="course_calendar" name="course_calendar" accept="image/png, image/jpeg" required>--}}

{{--</div>--}}
{{--<div class="form-group col-sm-12 col-sm-6">--}}
{{--    {!! Form::label('course_outline', 'Upload (image) Course Outline:') !!}--}}
{{--    {!! Form::file('course_outline',null, ['class' => 'form-control']) !!}--}}
{{--    <input type="file" id="course_outline" name="course_outline" accept="image/png, image/jpeg" required>--}}


{{--</div>--}}

{{--<div class="form-group col-sm-12 col-sm-6">--}}
{{--    {!! Form::label('course_iterms', 'Upload Course iterms (pdfs/word/excel):') !!}--}}
{{--    <input type="file" name="file[]" multiple/>--}}
{{--    {!! Form::file('course_iterms[]',null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Discount Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    {!! Form::number('discount_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Actual Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actual_price', 'Actual Price:') !!}
    {!! Form::number('actual_price', null, ['class' => 'form-control']) !!}
</div>
<!-- Actual Price Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('actual_price', 'Actual Price:') !!}--}}
{{--    {!! Form::number('actual_price', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<!-- View Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paynow_url', 'Paynow link:') !!}
    {!! Form::text('paynow_url', null, ['class' => 'form-control']) !!}
{{--    <input type="number" name="subscriber_count" value="" hidden>--}}
{{--    <input type="number" name="viewer_count" value="" hidden>--}}
</div>

<!-- Subscriber Count Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}--}}
{{--    {!! Form::number('subscriber_count', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-8">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div>

<ul class="p-0 m-0">
    @foreach( $latestcourses as $course)

    <li class="flex flex-wrap justify-content-between align-items-center">

        <img src="{{  asset('storage/course_image/'.$course->photo)}}"  alt="">

        <div class="content-wrap">
            <h3><a href="{{url('/courses/'. $course->id) }}">{{  str_limit($course->title ,$limit=40 ,$end='...')}}</a></h3>

            <div class="course-cost free-cost">${{  $course->discount_price }}</div>
        </div><!-- .content-wrap -->
    </li>
    @endforeach

</ul>

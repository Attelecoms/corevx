<section class="featured-courses horizontal-column courses-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="heading flex justify-content-between align-items-center">
                    <h2 class="entry-title">Featured Courses</h2>

                    <a class="btn mt-4 mt-sm-0" href="{{url('course')}}">view all</a>
                </header><!-- .heading -->
            </div><!-- .col -->





            @foreach($courses as $course)


            <div class="col-12 col-lg-6">
                <a href="{{url('/courses/'. $course->id) }}">
                <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                    <figure class="course-thumbnail">
                        <a href="{{url('/courses/'. $course->id) }}">
                           <img src="{{  asset('storage/course_image/'.$course->photo)}}" alt=""></a>
                    </figure><!-- .course-thumbnail -->
                    <br>
                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <div class="course-ratings flex align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>

                                <span class="course-ratings-count">(4 votes)</span>
                            </div><!-- .course-ratings -->

                            <h2 class="entry-title"><a href="{{url('/courses/'. $course->id) }}">{{  str_limit($course->title ,$limit=40 ,$end='...')}}</a></h2>

                            <div class="entry-meta flex flex-wrap align-items-center">
                                <div class="course-author"><a href="#">{{ $course->user['name'] }}</a></div>

                                <div class="course-date">{{ $course->created_at->format('h :i a-Dd M Y') }}</div>
                            </div><!-- .course-date -->
                        </header><!-- .entry-header -->

                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                <span class="free-cost">  $  {{  $course->discount_price }}</span>
                            </div><!-- .course-cost -->
                        </footer><!-- .entry-footer -->
                    </div><!-- .course-content-wrap -->
                </div><!-- .course-content -->
                </a>
            </div><!-- .col -->

                @endforeach






{{--            <div class="col-12 col-lg-6">--}}
{{--                <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">--}}
{{--                    <figure class="course-thumbnail">--}}
{{--                        <a href="#"><img src="images/2.jpg" alt=""></a>--}}
{{--                    </figure><!-- .course-thumbnail -->--}}

{{--                    <div class="course-content-wrap">--}}
{{--                        <header class="entry-header">--}}
{{--                            <div class="course-ratings flex align-items-center">--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}

{{--                                <span class="course-ratings-count">(4 votes)</span>--}}
{{--                            </div><!-- .course-ratings -->--}}

{{--                            <h2 class="entry-title"><a href="#">Learn Photoshop, Web Design & Profitable</a></h2>--}}

{{--                            <div class="entry-meta flex flex-wrap align-items-center">--}}
{{--                                <div class="course-author"><a href="#">Mr. John Wick</a></div>--}}

{{--                                <div class="course-date">Aug 21, 2018</div>--}}
{{--                            </div><!-- .course-date -->--}}
{{--                        </header><!-- .entry-header -->--}}

{{--                        <footer class="entry-footer flex justify-content-between align-items-center">--}}
{{--                            <div class="course-cost">--}}
{{--                                $32 <span class="price-drop">$59</span>--}}
{{--                            </div><!-- .course-cost -->--}}
{{--                        </footer><!-- .entry-footer -->--}}
{{--                    </div><!-- .course-content-wrap -->--}}
{{--                </div><!-- .course-content -->--}}
{{--            </div><!-- .col -->--}}












        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .courses-wrap -->

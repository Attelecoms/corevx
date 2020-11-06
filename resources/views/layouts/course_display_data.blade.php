


<section class="featured-courses vertical-column courses-wrap">
    <div class="container">
        <div class="row mx-m-25">
            <div class="col-12 px-25">
                <header class="heading flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Featured Courses</h2>

                    <nav class="courses-menu mt-3 mt-lg-0">
                        <ul class="flex flex-wrap justify-content-md-end align-items-center">
                            <li class="active"><a href="{{url('/categories/') }}">All</a></li>
                            @foreach($categories as $category)

                            <li><a href="{{url('/categories/'. $category->id) }}">{{$category->name }}</a></li>

                            @endforeach
                        </ul>
                    </nav><!-- .courses-menu -->
                </header><!-- .heading -->
            </div><!-- .col -->


{{--            starting the forloop--}}
            @foreach($courses as $course)

            <div class="col-12 col-md-6 col-lg-4 px-25">


                <div class="course-content">
                    <figure class="course-thumbnail">
                        <a href="{{url('/courses/'. $course->id) }}">



                            <img src="{{  asset('storage/course_image/'.$course->photo)}}"  alt="">

                        </a>
                    </figure><!-- .course-thumbnail -->

                    <div class="course-content-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{url('/courses/'. $course->id) }}">
                                    {{  str_limit($course->title ,$limit=40 ,$end='...')}}
                                </a></h2>
                            <a href="{{url('/courses/'. $course->id) }}">

                            <div class="entry-meta flex align-items-center">
                                <div class="course-author">
                                    {{ $course->user['name'] }}

                                </div>

                                <div class="course-date">{{ $course->created_at->format('h :i a-Dd M Y') }}</div>
                            </div><!-- .course-date -->
                            </a>
                        </header><!-- .entry-header -->
                        <a href="{{url('/courses/'. $course->id) }}">
                        <footer class="entry-footer flex justify-content-between align-items-center">
                            <div class="course-cost">
                                ${{  $course->discount_price }} <span class="price-drop">${{  $course->actual_price }}</span>
                            </div><!-- .course-cost -->

                            <div class="course-ratings flex justify-content-end align-items-center">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>

                                <span class="course-ratings-count">(4 votes)</span>
                            </div><!-- .course-ratings -->
                        </footer><!-- .entry-footer -->
                        </a>
                    </div><!-- .course-content-wrap -->
                </div><!-- .course-content -->

            </div><!-- .col -->

                    {{--                <h3>Popover Example</h3>--}}
                    {{--                <a  data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>--}}



            @endforeach





            <script>
                $(document).ready(function(){
                    $('[data-toggle="popover"]').popover();
                });
            </script>



            {{--            ending the forloop--}}


{{--            <div class="col-12 col-md-6 col-lg-4 px-25">--}}
{{--                <div class="course-content">--}}
{{--                    <figure class="course-thumbnail">--}}
{{--                        <a href="#"><img src="images/2.jpg" alt=""></a>--}}
{{--                    </figure><!-- .course-thumbnail -->--}}

{{--                    <div class="course-content-wrap">--}}
{{--                        <header class="entry-header">--}}
{{--                            <h2 class="entry-title"><a href="#">The Ultimate Drawing Course Beginner to Advanced</a></h2>--}}

{{--                            <div class="entry-meta flex align-items-center">--}}
{{--                                <div class="course-author"><a href="#">Michelle Golden</a></div>--}}

{{--                                <div class="course-date">Mar 14, 2018</div>--}}
{{--                            </div><!-- .course-date -->--}}
{{--                        </header><!-- .entry-header -->--}}

{{--                        <footer class="entry-footer flex justify-content-between align-items-center">--}}
{{--                            <div class="course-cost">--}}
{{--                                <span class="free-cost">Free</span>--}}
{{--                            </div><!-- .price-drop -->--}}

{{--                            <div class="course-ratings flex justify-content-end align-items-center">--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}

{{--                                <span class="course-ratings-count">(4 votes)</span>--}}
{{--                            </div><!-- .course-ratings -->--}}
{{--                        </footer><!-- .entry-footer -->--}}
{{--                    </div><!-- .course-content-wrap -->--}}
{{--                </div><!-- .course-content -->--}}
{{--            </div><!-- .col -->--}}

{{--            <div class="col-12 col-md-6 col-lg-4 px-25">--}}
{{--                <div class="course-content">--}}
{{--                    <figure class="course-thumbnail">--}}
{{--                        <a href="#"><img src="images/3.jpg" alt=""></a>--}}
{{--                    </figure><!-- .course-thumbnail -->--}}

{{--                    <div class="course-content-wrap">--}}
{{--                        <header class="entry-header">--}}
{{--                            <h2 class="entry-title"><a href="#">The Complete Digital Marketing Course</a></h2>--}}

{{--                            <div class="entry-meta flex align-items-center">--}}
{{--                                <div class="course-author"><a href="#">Ms. Lucius</a></div>--}}

{{--                                <div class="course-date">Dec 18, 2018</div>--}}
{{--                            </div><!-- .course-date -->--}}
{{--                        </header><!-- .entry-header -->--}}

{{--                        <footer class="entry-footer flex justify-content-between align-items-center">--}}
{{--                            <div class="course-cost">--}}
{{--                                $55 <span class="price-drop">$78</span>--}}
{{--                            </div><!-- .course-cost -->--}}

{{--                            <div class="course-ratings flex justify-content-end align-items-center">--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}

{{--                                <span class="course-ratings-count">(4 votes)</span>--}}
{{--                            </div><!-- .course-ratings -->--}}
{{--                        </footer><!-- .entry-footer -->--}}
{{--                    </div><!-- .course-content-wrap -->--}}
{{--                </div><!-- .course-content -->--}}
{{--            </div><!-- .col -->--}}

{{--            <div class="col-12 col-md-6 col-lg-4 px-25">--}}
{{--                <div class="course-content">--}}
{{--                    <figure class="course-thumbnail">--}}
{{--                        <a href="#"><img src="images/4.jpg" alt=""></a>--}}
{{--                    </figure><!-- .course-thumbnail -->--}}

{{--                    <div class="course-content-wrap">--}}
{{--                        <header class="entry-header">--}}
{{--                            <h2 class="entry-title"><a href="#">The Unreal Engine Developer Course</a></h2>--}}

{{--                            <div class="entry-meta flex align-items-center">--}}
{{--                                <div class="course-author"><a href="#">Mr. John Wick</a></div>--}}

{{--                                <div class="course-date">Otc 17, 2018</div>--}}
{{--                            </div><!-- .course-date -->--}}
{{--                        </header><!-- .entry-header -->--}}

{{--                        <footer class="entry-footer flex justify-content-between align-items-center">--}}
{{--                            <div class="course-cost">--}}
{{--                                <span class="free-cost">Free</span>--}}
{{--                            </div><!-- .course-cost -->--}}

{{--                            <div class="course-ratings flex justify-content-end align-items-center">--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}

{{--                                <span class="course-ratings-count">(4 votes)</span>--}}
{{--                            </div><!-- .course-ratings -->--}}
{{--                        </footer><!-- .entry-footer -->--}}
{{--                    </div><!-- .course-content-wrap -->--}}
{{--                </div><!-- .course-content -->--}}
{{--            </div><!-- .col -->--}}

{{--            <div class="col-12 col-md-6 col-lg-4 px-25">--}}
{{--                <div class="course-content">--}}
{{--                    <figure class="course-thumbnail">--}}
{{--                        <a href="#"><img src="images/5.jpg" alt=""></a>--}}
{{--                    </figure><!-- .course-thumbnail -->--}}

{{--                    <div class="course-content-wrap">--}}
{{--                        <header class="entry-header">--}}
{{--                            <h2 class="entry-title"><a href="#">Progressive Web Apps (PWA) - The Complete Guide</a></h2>--}}

{{--                            <div class="entry-meta flex align-items-center">--}}
{{--                                <div class="course-author"><a href="#">Mr. Tom Redder</a></div>--}}

{{--                                <div class="course-date">Sep 14, 2018</div>--}}
{{--                            </div><!-- .course-date -->--}}
{{--                        </header><!-- .entry-header -->--}}

{{--                        <footer class="entry-footer flex justify-content-between align-items-center">--}}
{{--                            <div class="course-cost">--}}
{{--                                $38 <span class="price-drop">$48</span>--}}
{{--                            </div><!-- .course-cost -->--}}

{{--                            <div class="course-ratings flex justify-content-end align-items-center">--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}

{{--                                <span class="course-ratings-count">(4 votes)</span>--}}
{{--                            </div><!-- .course-ratings -->--}}
{{--                        </footer><!-- .entry-footer -->--}}
{{--                    </div><!-- .course-content-wrap -->--}}
{{--                </div><!-- .course-content -->--}}
{{--            </div><!-- .col -->--}}

{{--            <div class="col-12 col-md-6 col-lg-4 px-25">--}}
{{--                <div class="course-content">--}}
{{--                    <figure class="course-thumbnail">--}}
{{--                        <a href="#"><img src="images/6.jpg" alt=""></a>--}}
{{--                    </figure><!-- .course-thumbnail -->--}}

{{--                    <div class="course-content-wrap">--}}
{{--                        <header class="entry-header">--}}
{{--                            <h2 class="entry-title"><a href="#">Cryptocurrency Investment Course 2018</a></h2>--}}

{{--                            <div class="entry-meta flex align-items-center">--}}
{{--                                <div class="course-author"><a href="#">Russell Stephens</a></div>--}}

{{--                                <div class="course-date">Nov 06, 2018</div>--}}
{{--                            </div><!-- .course-date -->--}}
{{--                        </header><!-- .entry-header -->--}}

{{--                        <footer class="entry-footer flex justify-content-between align-items-center">--}}
{{--                            <div class="course-cost">--}}
{{--                                <span class="free-cost">Free</span>--}}
{{--                            </div><!-- .course-cost -->--}}

{{--                            <div class="course-ratings flex justify-content-end align-items-center">--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star-o"></span>--}}

{{--                                <span class="course-ratings-count">(4 votes)</span>--}}
{{--                            </div><!-- .course-ratings -->--}}
{{--                        </footer><!-- .entry-footer -->--}}
{{--                    </div><!-- .course-content-wrap -->--}}
{{--                </div><!-- .course-content -->--}}
{{--            </div><!-- .col -->--}}

            <div class="col-12 px-25 flex justify-content-center">
                <a class="btn" href="courses/">view all courses</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .courses-wrap -->






















{{--@foreach($courses as $course)--}}
{{--    <a href="/courses/{{ $course->id }}">--}}
{{--<div class="col-12 col-md-6 col-lg-4 px-25" style="margin-top: -4%;" onclick="location.href='/courses/{{ $course->id }}';" >--}}
{{--    <div class="course-content"  style=" border-radius: 5px;border: 3px solid lightgreen;padding: 10px; ">--}}
{{--        <figure class="course-thumbnail">--}}
{{--            <a >  <img src="{{  asset('storage/course_image/'.$course->photo)}}"  style="height: 150px; " ></a>--}}
{{--        </figure><!-- .course-thumbnail -->--}}

{{--        <div class="course-content-wrap" >--}}
{{--            <header class="entry-header">--}}
{{--                <h2 class="entry-title"><a >{{  str_limit($course->title ,$limit=40 ,$end='...')}}</a></h2>--}}

{{--                <div class="entry-meta flex align-items-center">--}}
{{--                    <div class="course-author"><a href="#">{{ $course->user['name'] }} </a></div>--}}

{{--                    <div class="course-date">{{ $course->created_at->format('h :i a-Dd M Y') }}</div>--}}
{{--                </div><!-- .course-date -->--}}
{{--            </header><!-- .entry-header -->--}}

{{--            <footer class="entry-footer flex justify-content-between align-items-center">--}}

{{--                <div class="course-ratings flex  align-items-center">--}}
{{--                    Ratings :--}}
{{--                    <span class="fa fa-star checked"></span>--}}
{{--                    <span class="fa fa-star checked"></span>--}}
{{--                    <span class="fa fa-star checked"></span>--}}
{{--                    <span class="fa fa-star checked"></span>--}}
{{--                    <span class="fa fa-star-o"></span>--}}

{{--                    <span class="course-ratings-count">(4 votes)</span>--}}
{{--                </div>--}}

{{--            <div class="course-ratings flex  align-items-center">--}}
{{--                Students viewed :--}}
{{--                <span class="course-ratings-count">({{  $course->view_count }})</span>--}}
{{--            </div>--}}

{{--                <div class="btn btn-success btn-lg align-items-center" >--}}
{{--                    By Course:       $  {{  $course->discount_price }} <small class="text-muted"> <strike>{{  $course->actual_price }} </strike></small>--}}
{{--                </div><!-- .course-cost -->--}}

{{--                <!-- .course-ratings -->--}}
{{--            </footer><!-- .entry-footer -->--}}
{{--        </div><!-- .course-content-wrap -->--}}
{{--    </div><!-- .course-content -->--}}
{{--</div><!-- .col -->--}}
{{--    </a>--}}
{{--@endforeach--}}




        <div class="row mx-m-25">

            @foreach($courses as $course)
                @if($course->category_id==$category->id)

                <div class="col-12 col-md-6 col-lg-4 px-25" data-toggle="modal" data-target="{{ '#'. str_limit($course->title ,$limit=40 ,$end='...')}}">


                    <div class="course-content">
                        <figure class="course-thumbnail">
                            <a >



                                <img src="{{  asset('storage/course_image/'.$course->photo)}}"  alt="">

                            </a>
                        </figure><!-- .course-thumbnail -->

                        <div class="course-content-wrap">
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a >
                                        {{  str_limit($course->title ,$limit=40 ,$end='...')}}
                                    </a></h2>
                                <a >

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author">
                                            {{ $course->user['name'] }}

                                        </div>

                                        <div class="course-date">{{ $course->created_at->format('h :i a-Dd M Y') }}</div>
                                    </div><!-- .course-date -->
                                </a>
                            </header><!-- .entry-header -->
                            <a >
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

                </div>
                {{--start of the modal body--}}



                @include('layouts.modalcourses')

                @endif
                {{-- end of the modal--}}
            @endforeach
            {{--            ending the forloop--}}
            {{--            <div class="col-12 px-25 flex justify-content-center">--}}
            {{--                <a class="btn" href="courses/">view all courses</a>--}}
            {{--            </div><!-- .col -->--}}
        </div><!-- .row -->






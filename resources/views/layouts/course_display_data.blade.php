
<!------ Include the above in your HEAD tag ---------->

<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Courses</a>
                        @foreach($categories as $category)
                        <a class="nav-item nav-link" id="{{'nav-'.$category->name.'-tab' }}" data-toggle="tab" href="{{'#nav-'.$category->name }}" role="tab" aria-controls="{{'nav-'.$category->name }}" aria-selected="true">{{$category->name }}</a>
{{--                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Project Tab 3</a>--}}
                        @endforeach
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        {{--grid system start--}}
                        <div class="container">
                            <div class="row">
                                @foreach($courses as $course)


                                        {{--                                    <div class="col-sm">--}}
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

                                        @include('layouts.modalcourses')



                                @endforeach
                            </div>
                        </div>

                    </div>
                    @foreach($categories as $category)
                    <div class="tab-pane fade success" id="{{'nav-'.$category->name }}" role="tabpanel" aria-labelledby="{{'nav-'.$category->name.'-tab' }}">


{{--grid system start--}}
                        <div class="container">
                            <div class="row">
                                @foreach($courses as $course)
                                    @if($course->category_id==$category->id)

{{--                                    <div class="col-sm">--}}
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

                                        @include('layouts.modalcourses')


                                        @endif
                                @endforeach
                            </div>
                        </div>

                </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>

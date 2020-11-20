



@foreach($courses as $course)
    @include('layouts.modalcourses')


@endforeach









<div class="container">

    <ul class="nav nav-tabs">
{{--        selct all courses--}}
        <li class="active"><a data-toggle="tab" href="#home">All Courses </a></li>
        {{--        selct all courses--}}

        {{--        selct all catergory--}}
        @foreach($categories as $category)
        <li><a data-toggle="tab" href="{{'#'.$category->name }}">{{$category->name }}</a></li>
{{--        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>--}}
{{--        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>--}}
        {{--        selct all category--}}
        @endforeach
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active" style="height: 462px; border: none;">




            <div class="widget-container widget-width col-md-12">

                <div class="widget widget-9">

                    <div class="nav hidden-xs hidden-sm">
                        <button class="btn btn-default  prev" aria-label="Previous"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-default  next" aria-label="Next"> <i class="fa fa-arrow-right"></i></button>
                    </div>

{{--                    <a title="Donations" class="header-container" href="donations.html">--}}
{{--                        <div class="logo" style="background-image: linear-gradient(to bottom, #03d4f1, #8455fd);">--}}
{{--                            <img src="uploaded/52860df5-cd86-4ad9-943c-8af550f51119.svg" alt="Donations"/>--}}
{{--                        </div>--}}

{{--                        <div class="header">--}}
{{--                            <h2 class="title">Donations</h2>--}}
{{--                            <div class="description">Conveniently make donations to a Charity of your choice</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}






                    <div class="service-cards-container scrollable">



                        <div class="service-cards">

                            {{--start of card--}}
                            @foreach($courses as $course)

                            <a title="{{  str_limit($course->sub_title ,$limit=30 ,$end='...')}}" style="height: 300px; width: 300px;padding: 10px;"
                               data-toggle="modal" data-target="{{ '#'. str_limit($course->title ,$limit=40 ,$end='...')}}">

                                <div class="icon-container" style="height: 200px;">

                                    <img src="{{  asset('storage/course_image/'.$course->photo)}}"  alt="" style="height: 600px; width: 600px;padding: -10px;">
                                    <br />
                                    <br><h2 class="entry-title">{{  str_limit($course->title ,$limit=40 ,$end='...')}}</h2>
                                    <h4 class="entry-title">{{  str_limit($course->sub_title ,$limit=30 ,$end='...')}}</h4>
                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><i class="fa fa-user-circle"></i>
                                            {{ $course->user['name'] }}

                                        </div>

                                        <div class="course-date"> Created on :{{ $course->created_at->format('d M Y') }}</div>
                                    </div>
                                    <div class="entry-meta flex align-items-center text-warning">
                                        <div class="course-author">
                                            Type of Course

                                        </div>

                                        <div class="course-date">{{ $course->typesofcourse }}</div>
                                    </div>


                                    <footer class="entry-footer flex justify-content-between align-items-center">
                                        <div class="course-cost">
                                            $23 <span class="price-drop">$34</span>
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
                                </div>
                            </a>
                            {{--end of the card--}}
                            @endforeach
                            {{--start of card--}}

                        </div>
                        {{--                        end of div of service--}}

                    </div>

                    {{--end of services card scroller--}}

                </div>
            </div>


        </div>



        @foreach($categories as $category)
        <div id="{{$category->name }}" class="tab-pane fade" style="height: 462px; border: none;" >
{{--            <h3>Menu 1</h3>--}}
{{--            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}


            <div class="widget-container widget-width col-md-12">

                <div class="widget widget-9">

                    <div class="nav hidden-xs hidden-sm">
                        <button class="btn btn-default  prev" aria-label="Previous"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-default  next" aria-label="Next"> <i class="fa fa-arrow-right"></i></button>
                    </div>

{{--                                        <a title="Donations" class="header-container" href="donations.html">--}}
{{--                                            <div class="logo" style="background-image: linear-gradient(to bottom, #03d4f1, #8455fd);">--}}
{{--                                                <img src="uploaded/52860df5-cd86-4ad9-943c-8af550f51119.svg" alt="Donations"/>--}}
{{--                                            </div>--}}

{{--                                            <div class="header">--}}
{{--                                                <h2 class="title">{{$category->name }}</h2>--}}
{{--                                                <div class="description">{{$category->name }}</div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}






                    <div class="service-cards-container scrollable">



                        <div class="service-cards">

                            {{--start of card--}}
                            @foreach($courses as $course)
                                @if($category->id==$course->category_id)
                                <a title="{{  str_limit($course->sub_title ,$limit=30 ,$end='...')}}" style="height: 300px; width: 300px;padding: 10px;"
                                   data-toggle="modal" data-target="{{ '#'. str_limit($course->title ,$limit=40 ,$end='...')}}">

                                    <div class="icon-container" style="height: 200px;">

                                        <img src="{{  asset('storage/course_image/'.$course->photo)}}"  alt="" style="height: 600px; width: 600px;padding: -10px;">
                                        <br />
                                        <br><h2 class="entry-title">{{  str_limit($course->title ,$limit=40 ,$end='...')}}</h2>
                                        <h4 class="entry-title">{{  str_limit($course->sub_title ,$limit=30 ,$end='...')}}</h4>
                                        <div class="entry-meta flex align-items-center">
                                            <div class="course-author"><i class="fa fa-user-circle"></i>
                                                {{ $course->user['name'] }}

                                            </div>

                                            <div class="course-date"> Created on :{{ $course->created_at->format('d M Y') }}</div>
                                        </div>
                                        <div class="entry-meta flex align-items-center text-warning">
                                            <div class="course-author">
                                                Type of Course

                                            </div>

                                            <div class="course-date">{{ $course->typesofcourse }}</div>
                                        </div>


                                        <footer class="entry-footer flex justify-content-between align-items-center">
                                            <div class="course-cost">
                                                $23 <span class="price-drop">$34</span>
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
                                    </div>
                                </a>
                                @endif
                                {{--end of the card--}}
                            @endforeach
                            {{--start of card--}}

                        </div>
                        {{--                        end of div of service--}}

                    </div>

                    {{--end of services card scroller--}}

                </div>
            </div>









        </div>
        @endforeach
{{--        <div id="menu2" class="tab-pane fade">--}}
{{--            <h3>Menu 2</h3>--}}
{{--            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>--}}
{{--        </div>--}}
{{--        <div id="menu3" class="tab-pane fade">--}}
{{--            <h3>Menu 3</h3>--}}
{{--            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--        </div>--}}
    </div>
</div>







<script type="text/javascript">
    $(function() {
        $(".nav button").click(function() {
            var $nav = $(this),
                container = $nav.parent().parent().parent(),
                cards = container.find(".service-cards"),
                serviceCardsContainer = container.find(".service-cards-container"),
                next = $nav.hasClass("next"),
                cardWidth = cards.find("a:first").outerWidth(true),
                width = cardWidth,
                viewportWidth = cards.innerWidth();

            // scroll multiple at a time if viewport is big enough
            while (width + cardWidth <= viewportWidth)
                width += cardWidth;

            serviceCardsContainer.animate({ scrollLeft: (next ? "+=" : "-=") + width + "px" }, "fast");
        });
    });
</script>


<script src="bundles/latejsca38?v=2.34.2"></script>

<script src="bundles/latejs2ca38?v=2.34.2"></script>




<script type="text/javascript">
    [].forEach.call(document.querySelectorAll('img[data-src]'),
        function (img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.onload = function () {
                img.removeAttribute('data-src');
            };
        });

    $(function () {
        MESSAGING.GetServerAlerts();
        jQuery('.scrollable').scrollbar();
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


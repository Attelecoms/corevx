

<div class="featured-courses courses-wrap" id="example">
    <div class="row mx-m-25">
        @foreach($courses as $course)

        <div class="col-12 col-md-6 px-25">
            <div class="course-content">
                <figure class="course-thumbnail">
                    <a href="{{url('/courses/'. $course->id) }}">



                        <img src="{{  asset('storage/course_image/'.$course->photo)}}"  alt="">

                    </a>
                </figure><!-- .course-thumbnail -->

                <div class="course-content-wrap">
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="{{url('/courses/'. $course->id) }}">
                                {{  str_limit($course->title ,$limit=40 ,$end='...')}}</a></h2>

                        <div class="entry-meta flex flex-wrap align-items-center">
                            <div class="course-author"><a href="#">  {{ $course->user['name'] }}
                                </a></div>

                            <div class="course-date">{{ $course->created_at->format('h :i a-Dd M Y') }}</div>
                        </div><!-- .course-date -->
                    </header><!-- .entry-header -->

                    <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
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
                </div><!-- .course-content-wrap -->
            </div><!-- .course-content -->
        </div><!-- .col -->
        @endforeach
    </div>

</div><!-- .featured-courses -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );} );
</script>

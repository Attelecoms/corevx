<div class="modal fade" id="{{  str_limit($course->title ,$limit=40 ,$end='...')}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> {{  str_limit($course->title ,$limit=40 ,$end='...')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <iframe  style="width: 100% "height="350" src="{{ $course->promo_video_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <div class="container">
                    <div class="row">

                        {{--                                       table for courses topics--}}

                        <center><h6 class="modal-title" id="exampleModalLabel">Course content</h6></center>
                        {{--  {{ $course->what_will_students_learn }}--}}
                        @foreach ($course_outlines as $course_outline)
                            {{--                                               display when  condition is true if the course id is same as couse_outline ->couseid --}}
                            @if($course->id==$course_outline->course_id)

                                <table class="table ">

                                    <tbody>
                                    <tr>
                                        {{--                <th scope="row">1</th>--}}
                                        <td style="width:5px"><i class="fa fa-certificate"></i></td>
                                        <td class="text-justify"> {{ $course_outline->course_title}}</td>
                                        <td style="width:5px"> {{ $course_outline->duration}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            @endif
                        @endforeach
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md">
                            <center><h6 class="modal-title" id="exampleModalLabel">Target Students:</h6>
                                <p class="text-justify">{{ $course->target_students }}</p></center>
                        </div>
                        <div class="col-md">
                            <center><h6 class="modal-title" id="exampleModalLabel">Requirements:</h6>
                                <p class="text-justify">{{ $course->requirements }}</p></center>
                        </div>

                    </div>

                </div>

            </div>
            {{--                            start  footer modal--}}
            <a href="{{url('/courses/'. $course->id) }}">
                <div class="modal-footer">
                    {{--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    <button   class="btn btn-success">Proceed ${{  $course->discount_price }} Buy Now <i class="fa fa-arrow-right"></i></button>
                </div>
            </a>
            {{--                            end footer modal--}}
        </div>
    </div>
</div>

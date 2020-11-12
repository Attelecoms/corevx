<!DOCTYPE html>
<html lang="en">
{{--code for including the header links --}}
@include('headerr.header')
{{--code for including the header links --}}


<body CLASS="contact">
<div class="hero-content">
    <header class="site-header">


       {{-- code of including the top header code--}}
       @include('headerr.topheader')
       {{-- code of including the top header code--}}


        {{-- code of including the navbar code--}}
        @include('headerr.navbar')
        {{-- code of including the navbar code--}}


    </header><!-- .site-header -->

    <div class="hero-content-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                        <header class="entry-header">
                            <h4>Get started with online courses</h4>
                            <h1>best online<br/>Learning system</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Choose from 130,000 online video courses with new additions published every month</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                           <a href="{{url('register')}}">join us</a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .hero-content-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-content-hero-content-overlay -->
</div><!-- .hero-content -->

{{-- code of including the icon-boxes code--}}
{{--@include('layouts.icon-boxes')--}}
{{-- code of including the icon-boxes code--}}




{{-- code of including the course_available code--}}
{{--@include('layouts.course_available')--}}
{{-- code of including the course_available code--}}



{{-- code of including the course_display_data code--}}
@include('layouts.course_display_data')
{{-- code of including the course_display_data code--}}
{{--<style>--}}
{{--.zoom {--}}

{{--  transition: transform .2s; /* Animation */--}}


{{--}--}}

{{--.zoom:hover {--}}
{{--  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */--}}
{{--}--}}
{{--</style>--}}

{{--    <div class="accordion " id="accordionExample" style="padding: 20px;">--}}

{{--        <div class="card d-flex p-2">--}}
{{--           @foreach($categories as $category)--}}

{{--            <div class="card-header zoom" id="headingTwo">--}}
{{--                <h5 class="mx-auto "  >--}}
{{--                    <button class="btn btn  collapsed" type="button" style="width: 100%;" data-toggle="collapse"--}}
{{--                            data-target="{{'#'.$category->name }}" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                       Learn Latest Courses in {{$category->name }} <i class="fa fa-arrow-right d-flex align-items-end" ></i>--}}
{{--                    </button>--}}
{{--                </h5>--}}
{{--            </div>--}}
{{--            <div id="{{$category->name }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">--}}
{{--                <div class="card-body">--}}
{{--                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
{{--                    @include('layouts.category_courses')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--             @endforeach--}}

{{--        </div>--}}




{{--    </div>--}}



{{-- code of including the testmony code--}}
{{--@include('layouts.testimony')--}}
{{-- code of including the testmony code--}}





{{-- code of including the branding code--}}
@include('layouts.branding')
{{-- code of including the branding code--}}


{{-- code of including the footer bav code--}}
@include('footerr.footer_bar')
{{-- code of including the footer bav code--}}

{{-- code of including the footerlinks bav code--}}
@include('footerr.footer')
{{-- code of including the footerlinks bav code--}}



</body>
</html>

<!DOCTYPE html>
<html lang="en">
{{--code for including the header links --}}
@include('headerr.header')
{{--code for including the header links --}}


<body>
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
                            <a href="#">read more</a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .hero-content-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-content-hero-content-overlay -->
</div><!-- .hero-content -->

{{-- code of including the icon-boxes code--}}
@include('layouts.icon-boxes')
{{-- code of including the icon-boxes code--}}




{{-- code of including the course_available code--}}
{{--@include('layouts.course_available')--}}
{{-- code of including the course_available code--}}



{{-- code of including the course_display_data code--}}
@include('layouts.course_display_data')
{{-- code of including the course_display_data code--}}






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

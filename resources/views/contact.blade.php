<!DOCTYPE html>
<html lang="en">
{{--code for including the header links --}}
@include('headerr.header')
{{--code for including the header links --}}

<body class="contact-page">
<div class="page-header">
    <header class="site-header">


        {{-- code of including the top header code--}}
        @include('headerr.topheader')
        {{-- code of including the top header code--}}


        {{-- code of including the navbar code--}}
        @include('headerr.navbar')
        {{-- code of including the navbar code--}}


    </header><!-- .site-header -->

    <div class="page-header-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1>CONTACT</h1>
                    </header><!-- .entry-header -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header-overlay -->
</div><!-- .page-header -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumbs">
                <ul class="flex flex-wrap align-items-center p-0 m-0">
                    <li><a href="{{url('index')}}"><i class="fa fa-home"></i> Home</a></li>
                    <li>Contact</li>
                </ul>
            </div><!-- .breadcrumbs -->
        </div><!-- .col -->
    </div><!-- .row -->

    <div class="row justify-content-between">
        <div class="col-12">
            <div class="contact-gmap">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAyCkIjViJ_7vt5PMIHai_NjcdR64QYycw&q=Space+Needle,Seattle+WA" allowfullscreen></iframe>
            </div><!-- .contact-gmap -->
        </div><!-- .col -->

        <div class="col-12 col-lg-6">
            <div class="contact-form">
                <h3>Contact Form</h3>

                {{-- code of including the branding code--}}
                @include('contact-us.contactform')
                {{-- code of including the branding code--}}

            </div><!-- .contact-form -->
        </div><!-- .col -->

        <div class="col-12 col-lg-6">
            <div class="contact-info">
                <h3>Contact Information</h3>

                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. </p>

                <ul class="p-0 m-0">
                    <li><span>Location:</span>202 Seke rd Block 2 Nedlew Complex Graniteside Harare</li>
                    <li><span>Email:</span><a href="{{ url('mailto:admission@atacademy.com') }}">admission@atacademy.com</a></li>
                    <li><span>Phone:</span><a href="#">0242779156</a></li>
                </ul>
            </div><!-- .contact-info -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

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


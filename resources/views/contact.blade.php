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
        <div class="col-12 col-md-6 col-lg-4 px-25">
            <div class="contact-gmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.6185804915976!2d31.052985577016052!3d-17.856506481847163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a576ef545831%3A0x64bc70a616529375!2sAT%20Academy!5e0!3m2!1sen!2szw!4v1596632394532!5m2!1sen!2szw" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div><!-- .contact-gmap -->
        </div><!-- .col -->

        <div class="col-12 col-md-6 col-lg-4 px-25">
            <div class="contact-form">
                <h3>Contact Form</h3>

                {{-- code of including the branding code--}}
                @include('contact-us.contactform')
                {{-- code of including the branding code--}}

            </div><!-- .contact-form -->
        </div><!-- .col -->

        <div class="col-12 col-md-6 col-lg-4 px-25">
            <div class="contact-info">
                <h3>Need help ?</h3>

                <p>Get in touch to receive more info . </p>

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


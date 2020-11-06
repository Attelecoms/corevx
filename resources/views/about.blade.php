<!DOCTYPE html>
<html lang="en">
<head>
    {{--code for including the header links --}}
    @include('headerr.header')
    {{--code for including the header links --}}


</head>
<body class="about-page">
<div class="page-header">
    <header class="site-header">
        <header class="site-header">
            {{-- code of including the top header code--}}
            @include('headerr.topheader')
            {{-- code of including the top header code--}}


            {{-- code of including the navbar code--}}
            @include('headerr.navbar')
            {{-- code of including the navbar code--}}

        </header><!-- .site-header -->
    </header><!-- .site-header -->

    <div class="page-header-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <center> <h1>ABOUT</h1></center>
                    </header><!-- .entry-header -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header-overlay -->



</div><!-- .page-header -->


{{-- code of including the about-us file aboutbanner code--}}
@include('about-us.aboutbanner')
{{-- code of including the about-us file aboutbanner  code--}}


{{-- code of including the about-us file ourteam code--}}
@include('about-us.aboutestimate')
{{-- code of including the about-us file ourteam  code--}}


{{-- code of including the testmony code--}}
{{--@include('layouts.testimony')--}}
{{-- code of including the testmony code--}}

{{-- code of including the about-us file ourteam code--}}
@include('about-us.ourteam')
{{-- code of including the about-us file ourteam  code--}}


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

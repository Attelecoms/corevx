<!DOCTYPE html>
<html lang="en">
{{--code for including the header links --}}
@include('headerr.header')
{{--code for including the header links --}}

<body class="courses-page">
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
                        <h1>Courses Online</h1>
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
                    <li>Courses</li>
                </ul>
            </div><!-- .breadcrumbs -->
        </div><!-- .col -->
    </div><!-- .row -->

    <div class="row">
        <div class="col-12 col-lg-8">


            {{-- code of including the course file all course code--}}
            @include('courses.allcourses')
            {{-- code of including the course file all course  code--}}



            <div class="pagination flex flex-wrap justify-content-between align-items-center">
{{--                <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">--}}
{{--                    <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">--}}
{{--                        <li class="active"><a href="#">1</a></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="col-12 flex justify-content-start justify-content-lg-end col-lg-8 order-1 order-lg-2">
{{--                    <div class="pagination-results flex flex-wrap align-items-center">--}}
{{--                        <p class="m-0">Showing 1–3 of 12 results</p>--}}

{{--                        <form>--}}
{{--                            <select>--}}
{{--                                <option>Show: 06</option>--}}
{{--                                <option>Show: 12</option>--}}
{{--                                <option>Show: 18</option>--}}
{{--                                <option>Show: 24</option>--}}
{{--                            </select>--}}
{{--                        </form>--}}
{{--                    </div><!-- .pagination-results -->--}}
                </div>
            </div><!-- .pagination -->
        </div><!-- .col -->

        <div class="col-12 col-lg-4">
            <div class="sidebar">
                <div class="search-widget">
                    <form class="flex flex-wrap align-items-center">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                    </form><!-- .flex -->
                </div><!-- .search-widget -->

                <div class="cat-links">
                    <h2>Categories</h2>

                    {{-- code of including the category file all categories code--}}
                    @include('categories.allcategory')
                    {{-- code of including the category file all categories  code--}}

                </div><!-- .cat-links -->

                <div class="latest-courses">
                    <h2>Latest Courses</h2>
{{--display randomised (n) courses--}}

                    {{-- code of including the course file latest course code--}}
                    @include('courses.latestcourse')
                    {{-- code of including the course file latest course  code--}}

                </div><!-- .latest-courses -->

                <div class="ads">
                    <img src="images/ads.jpg" alt="">
                </div><!-- .ads -->

                <div class="popular-tags">
                    <h2>Popular Tags</h2>

                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">Unique</a></li>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">ideas</a></li>
                        <li><a href="#">Wordpress Template</a></li>
                        <li><a href="#">startup</a></li>
                    </ul>
                </div><!-- .popular-tags -->
            </div><!-- .sidebar -->
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

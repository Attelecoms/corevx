
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atacdemy-Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <link rel="shortcut icon" href="log/logoicon.png" type="image/x-icon"> <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

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
                        <center> </center>
                    </header><!-- .entry-header -->
                    <center>
                        <div class="wrap-login100" style="">



                        <form method="post" action="{{ url('/register') }}" class="login100-form validate-form">

                    {!! csrf_field() !!}
                            <h5>Register</h5>

                    <div class="wrap-input100 validate-input  form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="input100" name="name" value="{{ old('name') }}" placeholder="Full Name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('name'))
                            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                        @endif
                    </div>

                <div class="wrap-input100 validate-input form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="input100" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="input100" placeholder="Confirm password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
                    @endif
                </div>





                <div class="container-login100-form-btn">
                    <button class="login100-form-btn " type="submit" style="background: #19c880; color: white;" >Register</button>

                </div>



                <div class="text-center">
                    <a class="txt2" href="login">
                       Login in your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>







                        </div>
                    </center>


                    {{-- code of including the branding code--}}
                    @include('layouts.branding')
                    {{-- code of including the branding code--}}


                    {{-- code of including the footer bav code--}}
                    @include('footerr.footer_bar')
                    {{-- code of including the footer bav code--}}

                    {{-- code of including the footerlinks bav code--}}
                    @include('footerr.footer')
                    {{-- code of including the footerlinks bav code--}}

                </div><!-- .col -->




            </div></div></div></div>
</body>
</html>

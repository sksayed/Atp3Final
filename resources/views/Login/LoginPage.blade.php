@extends('Login.LoginMainLayout')
@section('content')

<div class="main" >
  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src=" {{ asset('lgin/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="/registration" class="signup-image-link">Create an account</a>
                    </div>
                  
                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="your_name" placeholder="Your Username"  value="{{ old('username')}}"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                     @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </form>
                        
                        <div class="social-login">
                            <span class="social-label">Or login with </span>
                            <ul class="socials">
                                <li><a href="www.facebook.com"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="www.twitter.com"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="www.google.com"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>


@endsection
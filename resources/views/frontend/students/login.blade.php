@extends('frontend.layout.master')

@section('content')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Signin</h2>
            <span class="underline center"></span>
            <p class="lead">If you don't have one, feel free to sign-up!</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li>Signin</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->
<!-- Start: Cart Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="signin-main">
                <div class="container">
                    <div class="woocommerce"> 
                        <div class="woocommerce-login">
                            <div class="company-info signin-register">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="company-detail bg-dark col-md-6">
                                        <div class="signin-head">
                                            <h2>Sign In</h2>
                                            <span class="underline left"></span>
                                        </div>
                                        <form class="login" method="POST" action="{{ url('/student/auth') }}">
                                            @csrf
                                            <p class="form-row form-row-first input-required">
                                                <label>
                                                    <span class="first-letter">Email</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="text"  id="username" name="email" class="input-text" value="{{ old('email') }}">
                                             </p>
                                            <p class="form-row form-row-last input-required">
                                                <label>
                                                    <span class="first-letter">Password</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="password" id="password" name="password" class="input-text" value="{{ old('pasword') }}">
                                            </p>
                                            <div class="clear"></div>
                                            <div class="password-form-row">
                                                <p class="form-row input-checkbox">
                                                    <input type="checkbox" value="1" id="rememberme" name="remember">
                                                    <label class="inline" for="rememberme">Remember me</label>
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#">Forgot Password?</a>
                                                </p>
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                |
                                                <a href="{{ url('/student/create') }}" class="">Sign Up?</a>
                                            </div>
                                            <div class="clear"></div>
                                        </form>
                                        @if ($errors->any())
                                            <div class="alert alert-danger pt-10">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Cart Section -->  
@endsection
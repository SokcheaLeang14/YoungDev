@extends('frontend.layout.master')

@section('content')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Sign Up</h2>
            <span class="underline center"></span>
            <p class="lead">If you don't have one, feel free to sign-up!</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li>Sign Up</li>
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
                                            <h2>Sign Up</h2>
                                            <span class="underline left"></span>
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
                                        <form class="login" action="{{ url('student/create/store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <p class="form-row form-row-first input-required">
                                                <label>
                                                    <span class="first-letter">Username</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="text"  id="username" name="username" class="input-text" value="{{ old('username') }}" autofocus>
                                            </p>
                                            <p class="form-row form-row-first input-required">
                                                <label>
                                                    <span class="first-letter">Email</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="email"  id="email" name="email" class="input-text" value="{{ old('email') }}" autofocus>
                                            </p>
                                            <p class="form-row form-row-last input-required">
                                                <label>
                                                    <span class="first-letter">Password</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="password" id="password" name="password" class="input-text">
                                            </p>
                                            <p class="form-row form-row-last input-required">
                                                <label>
                                                    <span class="first-letter">Confirm Password</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="password" id="confirm" name="confirm" class="input-text">
                                            </p>
                                            @if (Session::has('error'))
                                                <p style="color : red;">Password doesnot match!!</p>
                                            @endif
                                            <p class="form-row form-row-first input-required">
                                                <label>
                                                    <span class="first-letter">Department</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="text" id="department" name="department" class="input-text" value="{{ old('department') }}">
                                            </p>
                                            <p class="form-row form-row-first input-required">
                                                <label>
                                                    <span class="first-letter">Telephone</span>  
                                                    <span class="second-letter">*</span>
                                                </label>
                                                <input type="text" id="telephone" name="telephone" class="input-text" value="{{ old('telephone') }}">
                                            </p>
                                            <div>
                                                <input type="file" name="image">
                                            </div>
                                            <div class="clear"></div>
                                            <div class="text-center pt-10" style="margin-top: 1.5rem;">
                                                <input type="submit" value="Submit" name="submit" class="button btn btn-default">
                                                <p>
                                                    <a href="{{ url('/student/login') }}">Already have an account!! Sign In?</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </form>
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
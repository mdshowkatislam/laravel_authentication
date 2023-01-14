@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card ">


                {{-- <div class="card-body"> --}}
                    <div
                        class="card-body tx-center mg-b-40 wow zoomIn login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-20 bg-white rounded shadow-base ">
                        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse" style="text-align: center;">
                            <a href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">
                                <img src=" {{ asset('img/logo.png') }}"" width=" 60%"></a>
                            <a class="close" href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">
                                <span aria-hidden="true" class="close">×</span>
                            </a>
                        </div><br> <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">


                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter your email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">


                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Enter your password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 ">



                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    @endif



                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">

                                <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Sign in') }}
                                </button>

                            </div>
                            <div class="justify-content-center">Not a member?
                                <a href="{{ route('register') }}"" class=" tx-info">Sign Up
                                    <i class="ion-log-in"></i></a>
                            </div>


                    </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
<video class="bgvid" playsinline="1" autoplay="" muted="" loop="">
    <source src="{{ asset('video/video1.mp4') }}" type="video/mp4">


</video>

@endsection

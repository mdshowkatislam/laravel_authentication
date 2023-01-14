@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">


                <div
                    class="card-body tx-center mg-b-40 wow zoomIn login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-20 bg-white rounded shadow-base ">
                    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse" style="text-align: center;">
                        <a href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">
                            <img src=" {{ asset('img/logo.png') }}"" width=" 60%"></a>
                        <a class="close" href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">
                            <span aria-hidden="true" class="close">×</span>
                        </a>
                    </div><br>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">


                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Enter your Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter your valid email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">


                            <div class="col-md-12">

                                {{-- <input id="phone" type="number"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required placeholder="Enter mobile no e.g 0171XXXXXXX"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    size="11" minlength="11" maxlength="11"> --}}
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required
                                    placeholder="Enter mobile no e.g 0171XXXXXXX"
                                    onkeypress="return /[0-9]/i.test(event.key)" maxlength="11">

                                @error('phone')
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
                                    required autocomplete="new-password" placeholder="Enter your password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="form-group tx-12">By clicking the Sign Up button, you agreed to our
                            privacy
                            policy and terms of use of
                            our Company.
                        </div><br>

                        <div class="row mb-3">

                            <button type="submit" class="btn btn-info btn-lg btn-block">
                                {{ __('Sign Up') }}
                            </button>

                        </div>
                    </form>

                    <div class="mg-t-10 tx-center ">Already a member? <a href="{{ route('login') }}"
                            class="tx-info">Sign In <i class="fa fa-heart "></i>
                        </a></div>


                </div>
            </div>
        </div>
    </div>

</div>
<video class="bgvid" playsinline="1" autoplay="" muted="" loop="">
    <source src="{{ asset('video/video1.mp4') }}" type="video/mp4">


</video>


@endsection

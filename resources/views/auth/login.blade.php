@extends('layouts.frontend')

@section('extra')

@if(setting('recaptcha'))
    {!! htmlScriptTagJsApi([
            'action' => 'registration',])
    !!}
@endif
{!! NoCaptcha::renderJs() !!}
@endsection
@section('content')
     {{-- Header Starts --}}
     @include('frontend.includes.nav')
     @include('frontend.includes.banner',['banner_header'=>'Login'])
     {{-- Header Ends --}}


     <div class="user-area pt-100 pb-70">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-lg-6">
                  <div class="user-img">
                      <img src="{{asset('frontend/images/faq-img.jpg')}}" alt="faq"/>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="user-all-form">
                      <div class="contact-form">
                          <h3 class="user-title">
                              Sign in</h3>
                              <form method="POST" action="{{ route('login') }}">
                                @csrf
                              <div class="row">
                                  <div class="col-lg-12 ">
                                      <div class="form-group">
                                          {{-- <input type="text" name="name" id="name" class="form-control" required data-error="Username Or Email Address*" placeholder="Username Or Email Address*"> --}}
                                          <input id="login" type="text" placeholder="{{ __('app.username_or_email') }}" class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" autofocus>
                                          {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
                                          @if ($errors->has('username') || $errors->has('email'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          {{-- <input class="form-control" type="password" name="Password" placeholder="Password*"> --}}
                                          <input id="password" type="password" placeholder="{{ __('app.password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                          {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message}}</strong>
                                              </span>
                                          @enderror
                                        </div>
                                  </div>
                                  <div class="col-lg-12 form-condition">
                                      <div class="agree-label">
                                        <input type="checkbox" name="remember" value="{{old('remember')}}" id="remember">
                                          <label for="chb1">
                                            {{ __('app.remember_me') }}
                                              <a class="forget" href="/password/reset">Forgot Password?</a>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 col-md-12">
                                      <button type="submit" class="default-btn">
                                          Login Now
                                      </button>
                                  </div>

                                  @if(setting('captcha'))
                                  <div class="form-group has-feedback">
                                    {!! NoCaptcha::display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                                @endif
                                {{-- <div class="row">
                                  <div class="col-12">
                                    <div class="checkbox">
                                    <input type="checkbox" name="remember" value="{{old('remember')}}" id="remember">
                                      <label for="remember">
                                        {{ __('app.remember_me') }}
                                      </label>
                                    </div>
                                  </div>
                            
                                </div> --}}
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



  <div class="newsletter-area section-bg ptb-100">
      <div class="container">
          <div class="row">
              <div class="col-lg-5">
                  <div class="section-title mt-rs-20">
                      <span>ARE YOU IMPRESSED FOR AMAZING SERVICES?</span>
                      <h2>Subscribe our newsletter</h2>
                  </div>
              </div>
              <div class="col-lg-7">
                  <form class="newsletter-form" data-toggle="validator" method="POST">
                      <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
                      <button class="subscribe-btn" type="submit">
                          Subscribe Now
                          <i class="flaticon-paper-plane"></i>
                      </button>
                      <div id="validator-newsletter" class="form-result"></div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
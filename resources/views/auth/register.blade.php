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
     @include('frontend.includes.banner',['banner_header'=>'Sign Up'])
     {{-- Header Ends --}}


     <div class="user-area pt-100 pb-70">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-lg-6">
                  <div class="user-all-form">
                      <div class="contact-form">
                          <h3 class="user-title">
                              Sign up
                          </h3>
                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <input type="text" placeholder="{{ __('app.fullname') }}" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
                                          @error('fullname')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                                  </div>
                                  <div class="col-lg-12 ">
                                      <div class="form-group">
                                          <input type="text" placeholder="{{ __('app.username') }}" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                          @error('username')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                                  </div>

                                  <div class="col-lg-12 ">
                                      <div class="form-group">
                                          <input type="email" placeholder="{{ __('app.email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                          @error('username')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                        <input id="password" type="password" placeholder="{{ __('app.password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                        <input id="password-confirm" type="password" placeholder="{{ __('app.confirm_password') }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                    @if(setting('captcha'))
                                    <div class="form-group has-feedback">
                                      {!! NoCaptcha::display() !!}
                                      @if ($errors->has('g-recaptcha-response'))
                                          <span class="help-block text-danger" role="alert">
                                              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  @endif
                                  <!-- Submit Button -->
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="icheck-primary">
                                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                        <label for="agreeTerms">
                                         {{ __('app.i_agree_to_the') }} <a href="#">{{ __('app.terms') }}</a>
                                        </label>
                                      </div>
                                    </div>
                                 
                                  </div>
                                  </div>
                                  <div class="col-lg-12 col-md-12">
                                      <button type="submit" class="default-btn">
                                          Register
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="user-img">
                      <img src="{{asset('frontend/images/faq-img.jpg')}}" alt="faq"/>
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
@extends('web.layouts.main')
@section('content')
    <section class="login_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
            <div class="main_login">
              <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="login_fild">
                    <form action="{{route('login_data')}}" method="post">
                      @csrf
                      <h3>Login</h3>
                      <input type="email" placeholder="E-Mail" name="email"/><br>
                      <span style="color: red">@error('email'){{$message}}@enderror</span>
                      @if (session('emailActive'))
                        <span style="color: crimson">Your Account not Confirmed ,Please Confirm your Account By Email</span>
                      @endif
                      @if (session('emailNotfound'))
                        <span style="color: crimson">Email Not Found</span>
                      @endif
                      <input type="password" placeholder="Password"  name="password"/><br>
                      <span style="color: red">@error('password'){{$message}}@enderror</span>
                      @if (session('passwordNotFound'))
                        <span style="color: crimson">Password Not Match</span>
                      @endif
                      <button type="submit">Login</button>
                      {{--  <a href="javascript:void(0)">Login</a>  --}}
                      <a class="forgot_text" href="{{route('forgot')}}"
                        >Forgot Password?</a
                      >
                    </form>

                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="login_text text-center">
                    <h3>Register</h3>
                    <p>
                      By signing up you can get special services for members
                      only.
                    </p>
                    <a href="{{route('register')}}">Register</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('css')
@endsection
@section('js')
@endsection

@extends('web.layouts.main')
@section('content')
    <section class="login_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
            <div class="main_login">
              <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12" >
                  <div class="login_fild">
                    <form action="{{route('update_profile')}}" method="post">
                      @csrf
                      <h3>Profile</h3>
                      <input type="email" placeholder="E-Mail" value="{{ Auth::user()->email }}" disabled/><br>
                        <input type="password" placeholder="Old Password"  name="old_password"/><br>
                        <span style="color: red">@error('old_password'){{$message}}@enderror</span>
                        @if (session('oldPasswordNotFound'))
                            <span style="color: crimson">Password Not Match</span>
                        @endif
                      <input type="password" placeholder="New Password"  name="password"/><br>
                      <span style="color: red">@error('password'){{$message}}@enderror</span>
                      @if (session('passwordNotFound'))
                        <span style="color: crimson">Password Not Match</span>
                      @endif
                        <input type="password" placeholder="Confirm Password"  name="confirm_password"/><br>
                        <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                        @if (session('confirmPasswordNotFound'))
                            <span style="color: crimson">Password Not Match</span>
                        @endif
                      <button type="submit">Change</button>
                    </form>

                  </div>
                </div>
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                      <div class="login_fild">
                          <h3>Instagram Details</h3>
                          <p class="text-center">Kindly connect your instagram account</p>
                          <a href="{{route('instagram_login')}}">Connect</a>
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

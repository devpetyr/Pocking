@extends('web.layouts.main')
@section('content')
    <section class="login_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
            <div class="main_login">
              <div class="row">

                <div class="col-md-7 col-sm-7 col-xs-12" >
                  <div class="login_fild">
                      <h3>Instagram Profile</h3>
                      <br>
                   <div class="row">
                       <a href="{{ route('user_profile_data',[1]) }}"><img src="{{ asset('web/images/users-1.jpg') }}"></a>
                       <a href="{{ route('invoice') }}">CheckOut</a>
                   </div>


                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
{{--                    @dd($product)--}}
                      <div class="login_fild">
                          <div>
                              <div class="cart_like">
                                  <div class="main_20 text-center">
                                      <h3>Your Packages</h3>
                                      <span>{{$product->likes}}</span>
                                      <h5>{{$product->title}}</h5>
                                  </div>
                                  <div class="like_body">
                                      <h5>${{$product->price}}</h5>
                                  </div>
                                  <div class="li_package">
                                      <ul class="features text-center">
                                          <li>
                                              <i class="fa fa-star text-icon"></i> High
                                              Quality
                                          </li>
                                          <li>
                                              <i class="fa fa-unlock text-icon"></i>
                                              <strong>No Password</strong> Needed
                                          </li>
                                          <li>
                                              <i class="fa fa-thumbs-up text-icon"></i> Drop
                                              <strong>Protection</strong>
                                          </li>
                                          <li>
                                              <i class="fa-solid fa-shield-halved"></i>
                                              <strong>Safe</strong> and
                                              <strong>Easy</strong>
                                          </li>
                                          <li>
                                              <i class="fa fa-pie-chart text-icon"></i>
                                              <strong>Instant Delivery</strong> Guaranteed
                                          </li>
                                          <li>
                                              <i class="fa-solid fa-message"></i
                                              ><strong>24/7</strong> Support
                                          </li>
                                          <li class="text-success">
                                              <i class="fa-solid fa-check"></i> Secure
                                              Payments
                                          </li>
                                      </ul>
{{--                                      <div class="main_pkg">--}}
{{--                                          <a class="package_a"><i class="fa-solid fa-cart-arrow-down"></i>--}}
{{--                                              <a class="package_2" href="{{route('instagram_user',[$value->id])}}">Order now</a>--}}
{{--                                          </a>--}}
{{--                                      </div>--}}
                                  </div>
                              </div>
                          </div>
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

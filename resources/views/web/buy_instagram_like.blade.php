@extends('web.layouts.main')
@section('content')

    <section class="insta_like_text">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="text_like">
              <h2>
                <span>Buy Instagram Likes </span> with Instant Delivery in 2022
              </h2>
              <p>Select a package that you like and submit Order Now button</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="tab_sec">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="London" class="tabcontent active">
              <section class="insta_like">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="main_like">

                          @foreach($product as $value)
                              <div>
                                  <div class="cart_like">
                                      <div class="main_20 text-center">
                                          <span>{{$value->likes}}</span>
                                          <h5>{{$value->title}}</h5>
                                      </div>
                                      <div class="like_body">
                                          <h5>${{$value->price}}</h5>
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
                                          <div class="main_pkg">
                                              <a class="package_a"><i class="fa-solid fa-cart-arrow-down"></i>
                                                  <a class="package_2" href="{{route('buy_instagram_like',[$value->id])}}">Order now</a>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach

                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </section>
          </div>
          <div id="Paris" class="tabcontent">
            <section class="insta_like">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main_like">
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>50</span>
                            <h5>50 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>0.89</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>100</span>
                            <h5>100 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>0.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>300</span>
                            <h5>300 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>2.59</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>500</span>
                            <h5>500 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>4.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>1000</span>
                            <h5>1000 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>6.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>2500</span>
                            <h5>2500 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>11.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>5000</span>
                            <h5>5000 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>19.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>10000</span>
                            <h5>10k Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>29.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>20000</span>
                            <h5>20000 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>59.899</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>20000</span>
                            <h5>20000 Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>59.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>35000</span>
                            <h5>35k Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>99.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>50000</span>
                            <h5>50k Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>139.99</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="cart_like">
                          <div class="main_20 text-center">
                            <span>100000</span>
                            <h5>100k Instagram Likes</h5>
                            <a href="javascript:void(0)">★★★★★ 3 Reviews</a>
                          </div>
                          <div class="like_body">
                            <sub>$</sub>
                            <h5>27999</h5>
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
                            <div class="main_pkg">
                              <a class="package_a" href="javascript:void(0)"
                                ><i class="fa-solid fa-cart-arrow-down"></i
                                ></a>
                              <a class="package_2" href="javascript:void(0)"
                                >Order now</a
                                >
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
        </div>
      </div>
      </div>
      </div>
    </section>
    <div class="like_content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="like_text text-center">
              <h6>
                Are there benefits to
                <a class="dis-able" href="javascript:void(0)"
                  >buying Instagram likes?</a
                  >
              </h6>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Similique sequi amet pariatur magni illo tempore quae enim
                voluptatem delectus, ducimus necessitatibus assumenda quod unde
                aliquid ab dolores sunt adipisci error.
              </p>
              <h6>How can Goread.io help me to buy instagram likes?</h6>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                earum obcaecati omnis veniam, inventore culpa autem aut aliquid
                nobis et quidem eligendi deserunt! Sapiente commodi at quaerat
                minima veniam tempore!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi culpa hic dolorum quibusdam! Magnam distinctio dolores
                ea debitis explicabo tempore ut eveniet impedit consectetur
                laudantium id, reiciendis quis nesciunt inventore.
              </p>
              <h6>We have following Instagram Likes packages</h6>
              <a href="javascript:void(0)">50 Instagram Likes for $0.89</a>
              <a href="javascript:void(0)">100 Instagram Likes for $0.99</a>
              <a href="javascript:void(0)">300 Instagram Likes for $2.59</a>
              <a href="javascript:void(0)">500 Instagram Likes for $4.99</a>
              <a href="javascript:void(0)">1000 Instagram Likes for $6.99</a>
              <a href="javascript:void(0)">2500 Instagram Likes for $11.99</a>
              <a href="javascript:void(0)">5000 Instagram Likes for $19.99</a>
              <a href="javascript:void(0)">10000 Instagram Likes for $29.99</a>
              <a href="javascript:void(0)">20k Instagram Likes for $59.99</a>
              <a href="javascript:void(0)">35k Instagram Likes for $99.99</a>
              <a href="javascript:void(0)">50k Instagram Likes for $139.99</a>
              <a href="javascript:void(0)">100k Instagram Likes for $279.99</a>
              <h6>The Ultimate Guide To Instagram Likes</h6>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Molestiae iure ducimus doloremque tempora recusandae, vero
                repudiandae dignissimos nulla cupiditate numquam libero maiores,
                dolore reiciendis quo architecto reprehenderit ea accusamus
                mollitia?
                <a class="dis-able" href="javascript:void(0)"
                  >social media promotion</a
                  >
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Molestiae iure ducimus doloremque tempora recusandae, vero
                repudiandae dignissimos nulla cupiditate numquam libero maiores,
                dolore reiciendis quo architecto reprehenderit ea accusamus
                mollitia?
                <a class="dis-able" href="javascript:void(0)"
                  >Better Business Bureau®</a
                  >
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                sequi, assumenda quaerat sapiente similique nihil aliquid iure
                atque illum cumque, pariatur officiis dolorum asperiores dicta
                voluptatem debitis. Iure, officia iste?
              </p>
              <h6>The History of Instagram</h6>
              <p>
                <a class="dis-able" href="javascript:void(0)">Instagram</a> was
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                aut voluptatibus ullam deleniti sequi officia. Optio ab totam
                voluptas quaerat vero reiciendis amet iste omnis corrupti
                recusandae, sed libero? Beatae.
                <a class="dis-able" href="javascript:void(0)"> Kevin Systrom.</a
                  >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo
                cumque vero nemo asperiores? Aspernatur itaque neque libero in
                et debitis voluptatum officia iure ullam consectetur, voluptatem
                eveniet cupiditate saepe voluptate.
                <a class="dis-able" href="javascript:void(0)"
                  >https://blog.hubspot.com/marketing/buy-instagram-likes</a
                  >
              </p>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem,
                aliquid cupiditate eos tenetur molestias voluptatem reiciendis
                blanditiis, nihil maiores, et illo delectus voluptas temporibus
                ipsum magnam adipisci veniam tempore quo.
              </p>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Tenetur veniam temporibus nisi accusamus suscipit, nostrum eaque
                eligendi minima ratione perferendis, recusandae obcaecati enim
                ullam alias repellat voluptas debitis inventore veritatis.
              </p>
              <a href="#">Buy 200 Real Instagram Likes</a>
              <a href="#">Buy 1500 Real Instagram Likes</a>
              <a href="#">Buy 3000 Real Instagram Likes</a>
              <a href="#">Buy 8000 Real Instagram Likes</a>
              <h6>What Are Likes?</h6>
              <p>
                If you have used any other major social media platform, you probably already understand the concept of “likes”, but for the sake of keeping it simple, we are going to pretend for a moment that you have never heard of a like before. A like is what the viewer does to indicate to you that they have viewed something that you posted, and that they enjoyed it or agreed with it. By double-tapping the video or picture, the viewer “likes” it, and each like is added to a tally that is visible only to the person or organization that posted it. Likes are not meant to share the picture or video with other viewers, and they do not indicate that the person intends to do any business with your company. Likes are nothing more than an acknowledgement that your post was viewed and appreciated. That being said, likes are vitally important, but not as easy to come by as you might think. In this article, we will continue to explore the surprisingly complex system of gaining likes on Instagram.
              </p>
              <h6>How Does Instagram Decide Who Sees What?</h6>
              <p>
                In order to ensure that viewers are seeing the most relevant posts to them, Instagram introduced an algorithm in 2015 that would change the order in which users see pictures and videos. The new algorithm was introduced to replace the old chronological order because Instagram was becoming so popular, with over 400 million users at the time, that showing the posts chronologically was no longer a sensible way for the platform to operate. Another reason for the change was the introduction of advertisements, which would be fitted into the new algorithm.
              </p>
              <p>
                When the new algorithm was first proposed, it was met with controversy and hostility, because marketers were already working under the conditions that the timing of each post was pivotal. The new algorithm would upend the whole marketing operation on Instagram, because now technology would decide who wees what based on the users own follows, and who they actually engage with. This was great for the individual user, but proved to be a difficult change for social media marketers. The marketers adapted to the new system, of course, but the algorithm is fairly organic and changes regularly, so marketers are forced to stay on their toes and adapt to regular changes. Overall the new algorithm seems to have had a positive impact on the platform, and the response from users seems fairly receptive.
              </p>
              <a href="#">
              Advertisements on Instagram
              </a
                >
              <p>
                That being said, advertising with Instagram is very effective, and not terribly difficult for those that aren’t professional marketers. In this part of the article, we will go over a few very simple tips and tricks for effective advertising on Instagram. Although this guide will help you get off to a strong start, it is important to note that the more research you do in advance, the more effective your advertising campaign will be. And also you can buy instagram views from Goread.io
              </p>
              <p>  Set Your Budget: The first step is probably the simplest, but also the most limiting, set your budget. Keep in mind that more money does not automatically equal a more impactful campaign. If you are looking to sell an app that connects members of one specific neighborhood in one specific city, you don’t really need a budget big enough for a nationwide campaign. In fact, you might even be able to get away with something like an influencer putting the word out, in which case you may not even need an advertising campaign
              </p>
              <p>Know Your Audience: This step does seem to contradict with some of what we said earlier, since this is all about figuring out what specific group you are advertising to. Earlier we said that the main goal of advertising is to reach as many people as possible, including those that are not already in your base, but that does not mean it isn’t essential that you know who your base is. For instance, if you were writing a young adult fantasy novel about a group of female heroes fighting against a tyrannical male, your first instinct might be to think that your core demographic is young females between the ages of 14-21. While that is probably true, there would also be some room for young males in college, feminist activist groups, and just fantasy-genre lovers in general. You can test different core groups in order to find the most profitable demographic. The key here is for you to focus on your demographic when creating and advertising so that you can keep your base, while also attempting to expand it.
              </p>
              <p>Learn The Metrics: Understanding the metrics of likes, clicks, comments, and conversions is essential to your advertising campaign. Not only are these going to be the units by which you measure the success of the campaign, but the ratios will be used to adapt your campaign to trends and changes in the future. For example, if you are receiving five likes for every one conversion (actual sales made after likes and clicks), then you are in pretty good shape, but one thousand likes for every one conversion means there is probably something amiss, and you will need to find a way to close the deal on interested users.
              </p>
              <p>Don’t Forget The Long Game: Although you do want to push for high numbers in the short term, as these bursts will often help to sustain you when business inevitably slows as excitement dies down, never forget that advertising has a long game as well. Building a recognizable name and brand recognition is what sets apart McDonalds from Joe’s Burger Shack.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Temporibus odio, alias vero ad libero architecto suscipit
                praesentium eveniet earum, optio, illum exercitationem quos
                dolor fugiat recusandae impedit. Et, necessitatibus delectus?
              </p>
              <h6>
                The Magic of The Algorithm
              </h6>
              <h6>That Wasn’t So Hard, Was It?</h6>
              <p>The point of creating and introducing the algorithm in the first place was not just to expand Instagram’s base, but to keep users engaged longer. Having a lot of regular users is important for a social media platform, but after that, the money is in keeping them looking at the platform for as long as possible, so that they can see as many advertisements as possible. Here is how the algorithm makes that happen.
              </p>
              <h6>A user logs on and looks at pictures and videos.</h6>
              <p>The algorithm collects relevant data about what the user took an interest in, and stores the data for next time</p>
              <p>The user comes back, and finds that the pictures and videos they are looking at are now catered to their personal taste, so they spend more time on the platform.</p>
              <p>The algorithm collects even more specific data, and stores it for next time.</p>
              <p>Rinse and repeat.</p>
              <p>As you can see, the system is set up to benefit both the user and the advertisers; and benefitting the user and advertisers is good for Instagram as a whole.</p>
              <h6>Cheaters Never Prosper</h6>
              <p>For your own good, do not spend time or resources trying to cheat the system. The short term results of using spam bots or other unsavory methods are simply not worth what you will invest. Instagram is constantly on the lookout for spamming accounts, and they get banned regularly. Even if they don’t find you out right away, the users will hardly be fooled. If you post an advertisement something most people have never heard of, and get 200,000 likes in the first hour, most users are savvy enough to see right through that. Even using organic marketing services, which offer actual people to like and comment on your posts for a price, is simply not as effective as working with the system for actual organic likes over the long haul.</p>
              <h6>High-Quality Content Draws High-Quality Users</h6>
              <p>Ask yourself this question: would you rather have 100,000 likes and make 25 sales, or would you rather have 100 likes and make 99 sales? In this circumstance, obviously making more sales with less likes is preferable, but what you really want is both. Gimmicks and tricks will get you thousands of likes, and zero real interest. A fantastic product will get you a loyal base, and little expansion. However, a quality product combined with quality content on Instagram will bring in the kind of users that are actually looking to buy, and if you impress them, they will help to spread the word for you through likes and word-of-mouth.</p>
              <p>Look at it this way, you can evoke a legitimate reaction from people by asking them if they prefer Chevrolet or Ford. The question is, why? It is because Chevy and Ford have both done one thing demonstrably right, they made their brands a question of honesty and quality, rather than just popularity. People will almost feel a moral obligation to commit to certain brands over
              </p>
              <p>others, because those brands have taken the time to create organic and authentic interest in their product. However you feel about those particular brands, they invested the time and money into creating genuine interest, and forsook the easy way. Likes work in a very similar fashion. It is not about racking up numbers at any cost, it is about generating real enthusiasm about real quality content.
              </p>
              <p>Details, Details…</p>
              <p>There is a quote from Fredrick Bachman, a Swedish writer, “Everything is complicated if no one explains it to you”. All of this might seem a little difficult to grasp, and you might be thinking that there has to be a lot of details that you simply are not getting. Well, that is correct. Building an organic following on Instagram is not terribly complicated, but it can seem that way if you don’t have the right help. Here are the definitions of a few words and phrases that you might run into while you’re building your campaign.
              </p>
              <p><a href="javascript:void(0)">Influencer:</a> An influencer is someone with a following so large that they can influence trends and sales on Instagram. A plug from an influencer is not a guarantee of success, but it can definitely help.
              </p>
              <p>Social Proof: Put simply, this just means that people are more likely to do something if they see others doing it first. The term was coined by Robert Cialdini, a professor at Arizona State University. Social proof is the reason that influencers matter in social media marketing.
              </p>
              <p>Organic Likes: This means likes that came from actual people that actually have an interest in your content. There is such a thing as “organic marketing services”, but these are paid for and not really organic at all. Organic likes are not paid for, not bots, and not duped into thinking your product is something other than what it really is. Without a doubt there is nothing better for your marketing campaign than a lot of truly organic likes.
              </p>
              <h6>And also you can buy following Instagram follower packages from Goread.io
              </h6>
              <a href="javascript:void(0)">50 Instagram Followers</a>
              <a href="javascript:void(0)">Cheap Instagram Followers $1</a>
              <a href="javascript:void(0)">100 Instagram Followers</a>
              <a href="javascript:void(0)">300 Instagram Followers</a>
              <a href="javascript:void(0)">500 Instagram Followers</a>
              <a href="javascript:void(0)">1000 Instagram Followers</a>
              <a href="javascript:void(0)">2500 Instagram Followers</a>
              <a href="javascript:void(0)">5000 Instagram Followers</a>
              <a href="javascript:void(0)">10000 Instagram Followers</a>
              <a href="javascript:void(0)">20k Instagram Followers</a>
              <a href="javascript:void(0)">50k Instagram Followers</a>
              <a href="javascript:void(0)">100k Instagram Followers</a>
              <h6>That Wasn’t So Hard, Was It?
              </h6>
              <p>Just to make this as easy as possible for everyone, here is a summary of this whole article in one sentence; create high quality and honest content, and you will get more organic likes. It really is as easy as that. Even if you never took the time to study the marketing techniques, algorithms, or current trends, you could be wildly successful just by giving the users what they actually want. That being said, the more you know about how social media marketing works, the more successful you will be.
              </p>
              <div class="video_like">
                <iframe  src="https://www.youtube.com/embed/yAoLSRbwxL8"   allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="like_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="bg_text">
              <h2>How to Buy a Package?</h2>
              <p>
                Buying social media packages from Goread.io is simple and fast.
                Just follow these steps
              </p>
            </div>
            <div class="bg_top">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="bg_text1">
                    <h5>Choose Package</h5>
                    <p>
                      It's easy to get started with us. Choose from our wide
                      range of Instagram marketing packages that cater your
                      requirements
                    </p>
                    <div class="bg-number">1</div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="bg_text1">
                    <h5>Enter Your Instagram Username</h5>
                    <p>
                      In the order form simply enter your Instagram username.
                      Our system will automatically fetch your public info. We
                      DON’T require your password
                    </p>
                    <div class="bg-number">2</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="bg_text1 bg_text2">
                    <h5>Wait for results</h5>
                    <p>
                      You can pay via any bank card. We will proceed with the
                      order and inform you once its done via email. You can also
                      track your order status from the client area
                    </p>
                    <div class="bg-number">3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faqs_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="faq_text">
              <h3>Goread - Your #1 Instagram Maketing Service Provider</h3>
              <p>1,000,000 happy customer's can't be wrong!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="accordion-text">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseOne"
                      aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseOne"
                      >
                    Lorem Ipsum
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne"
                    >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Delectus quia obcaecati quas, corporis adipisci
                        omnis in est voluptatum, eligendi nulla velit dolor ad?
                        Beatae possimus in similique fugit exercitationem
                        impedit!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseTwo"
                      aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwo"
                      >
                    Lorem Ipsum
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo"
                    >
                    <div class="accordion-body">
                      <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Excepturi eum dolore soluta consectetur officia
                        hic dicta beatae eligendi dolor sed libero fuga saepe
                        earum nesciunt voluptatibus sequi, velit sunt expedita!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseThree"
                      aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseThree"
                      >
                    Lorem Ipsum
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree"
                    >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora explicabo vitae consectetur nobis quam odio vel
                        voluptas neque dolore, odit debitis delectus iure
                        quaerat ipsam maiores culpa? Officia, odit ipsa.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="accordion-text">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseFour"
                      aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseFour"
                      >
                    Lorem Ipsum
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseFour"
                    class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingFour"
                    >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Delectus quia obcaecati quas, corporis adipisci
                        omnis in est voluptatum, eligendi nulla velit dolor ad?
                        Beatae possimus in similique fugit exercitationem
                        impedit!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseFive"
                      aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseFive"
                      >
                    Lorem Ipsum
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFive"
                    >
                    <div class="accordion-body">
                      <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Excepturi eum dolore soluta consectetur officia
                        hic dicta beatae eligendi dolor sed libero fuga saepe
                        earum nesciunt voluptatibus sequi, velit sunt expedita!
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseSix"
                      aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseSix"
                      >
                    Lorem Ipsum
                    </button>
                  </h2>
                  <div
                    id="panelsStayOpen-collapseSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingSix"
                    >
                    <div class="accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora explicabo vitae consectetur nobis quam odio vel
                        voluptas neque dolore, odit debitis delectus iure
                        quaerat ipsam maiores culpa? Officia, odit ipsa.
                      </p>
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

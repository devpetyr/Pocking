@extends('web.layouts.main')
@section('content')

    <!-- banner start -->
    <section class="banner">
      <!-- particles.js container -->
      <div class="container">
        <div class="bannerinside">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 centerCol">
              <div
                class="bannerText text-center wow fadeInLeft"
                data-wow-duration="2s"
                style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: fadeInLeft;
                "
                >
                <h2>
                 Contact Us
                </h2>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->

    <!-- contact us start  -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div
                  class="centerheading wow fadeInLeft"
                  data-wow-duration="2s"
                  style="
                  visibility: visible;
                  animation-duration: 2s;
                  animation-name: fadeInLeft;
                  "
                  >
                  <span>Stay connected with us for any reason</span>
                </div>
              </div>
            </div>
            <div class="cus_cont4">
              <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div
                    class="cus_con2 wow fadeInLeft"
                    data-wow-duration="2s"
                    style="
                    visibility: visible;
                    animation-duration: 2s;
                    animation-name: fadeInLeft;
                    "
                    >
                    <h4>Write us a message</h4>
                    <div class="row g-3">
                      <div class="col-md-12">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Your name"
                          aria-label="Your name"
                          />
                      </div>
                      <div class="col-md-12">
                        <input
                          type="email"
                          class="form-control"
                          placeholder="Your email"
                          aria-label="Your email"
                          />
                      </div>
                      <div class="col-md-12">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Subject"
                          aria-label="Subject"
                          />
                      </div>
                      <div class="form-floating">
                        <textarea
                          class="form-control"
                          placeholder="Leave a comment here"
                          id="floatingTextarea2"
                          style="height: 100px"
                          ></textarea>
                        <label for="floatingTextarea2"
                          >Start writing message here</label
                          >
                        <button>Get Started</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div
                    class="cus_con5 wow fadeInRight"
                    data-wow-duration="2s"
                    style="
                    visibility: visible;
                    animation-duration: 2s;
                    animation-name: fadeInRight;
                    "
                    >
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor inci didunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <div class="cus_icon2">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <div class="cus_icon">
                            <ul>
                              <li><i class="fa-solid fa-phone"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <div class="cus_con6">
                            <h6>Phone</h6>
                            <ul>
                              <li>
                                <a href="tel:+19494682265">(949) 468-2265</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cus_icon2">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <div class="cus_icon">
                            <ul>
                              <li class="icon_2">
                                <i class="fa-solid fa-envelope"></i>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <div class="cus_con6">
                            <h6>Email</h6>
                            <ul>
                              <li>
                                <a href="mailto:Info@impactdigitalservice.com"
                                  >Info@impactdigitalservice.com</a
                                  >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cus_icon2">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <div class="cus_icon addre_1">
                            <ul>
                              <li iclass="icon_3">
                                <i class="fa-solid fa-location-dot"></i>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <div class="cus_con6">
                            <h6>Address</h6>
                            <ul>
                              <li>
                                <a href="javascript:void(0)"
                                  >Elkridge, MD 21075, United States</a
                                  >
                              </li>
                            </ul>
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
      </div>
    </section>
    <!-- contact us start  -->
     
@endsection
@section('css')
@endsection
@section('js')
@endsection
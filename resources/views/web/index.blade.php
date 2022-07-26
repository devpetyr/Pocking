@extends('web.layouts.main')
@section('content')
    <!-- banner start -->
    <section class="banner">
        <!-- particles.js container -->
        <div class="container">
            <div class="bannerinside">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div
                                class="bannerText wow fadeInLeft"
                                data-wow-duration="2s"
                                style="
                  visibility: visible;
                  animation-duration: 2s;
                  animation-name: fadeInLeft;
                "
                        >
                            <h2>
                                Grow your Presence with <span>Instagram</span> Followers,
                                Likes and Views
                            </h2>

                            <!-- <p>Impact Digital Services is an exclusive custom web and app development firm that has built the most outstanding projects in history. We are sprinkled with seasoned design and development geeks in midtown, and we have everything you want.</p> -->
                            <a
                                    class="start_btn"
                                    href="#get-started"
                                    target=""
                            >Get Started</a>
                            <a href="{{route('buy_instagram_like')}}">Buy Instagram Likes</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div
                                class="bannerimg wow fadeInRight"
                                data-wow-duration="2s"
                                style="
                  visibility: visible;
                  animation-duration: 2s;
                  animation-name: fadeInRight;
                "
                        >
                            <img src="{{asset('web/images/banner_sec1.png')}}" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    <!-- build sec start -->
    <section class="BuildTrust">
        <div class="container">
            <div class="row" id="get-started">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div
                            class="centerheading wow fadeInLeft"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: fadeInLeft;
              "
                    >
                        <h4>OUR PROCESS</h4>
                        <span>How it works?</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="trustbox purple wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <img src="{{asset('web/images/cart-1.png')}}" class="img-fluid"/>
                        <small>Select Package</small>
                        <p>
                            Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                            trud exerci tation
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="trustbox green wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <img src="{{asset('web/images/cart-2.png')}}" class="img-fluid"/>
                        <small>Enter Details</small>
                        <p>
                            Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                            trud exerci tation
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="trustbox orange wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <img src="{{asset('web/images/cart-3.png')}}" class="img-fluid"/>
                        <small>See the Magic </small>
                        <p>
                            Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                            trud exerci tation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- build sec end -->
    <!-- instagram sec  start -->
    <section class="instagram_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div
                            class="insta_text fadeInLeft"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: fadeInLeft;
              "
                    >
                        <h3>See why we are the best!</h3>
                        <h6>
                            Pore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exerction
                        </h6>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excep teur sint occae
                            cat cupidatat non proident, sunt in culpa qui officia deser unt
                            mollit anim id est laborum.
                        </p>
                        <a href="javascript:void(0)">Know More</a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div
                                    class="insta_img fadeInLeft"
                                    data-wow-duration="2s"
                                    style="
                    visibility: visible;
                    animation-duration: 2s;
                    animation-name: fadeInRight;
                  "
                            >
                                <img src="{{asset('web/images/insta_sec1.png')}}" class="img-fluid"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div
                                    class="insta_2img fadeInLeft"
                                    data-wow-duration="2s"
                                    style="
                    visibility: visible;
                    animation-duration: 2s;
                    animation-name: fadeInRight;
                  "
                            >
                                <img src="{{asset('web/images/insta_sec2.png')}}" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagaram  end  -->

    <!-- serviceman sec start  -->
    <section class="servicemain">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div
                            class="rightheading text-center wow fadeInRight"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: fadeInRight;
              "
                    >
                        <h4>What we do</h4>
                        <span
                        >Service to solve all kinds of <br/>
                Instagram problem</span
                        >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="hover-switch wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <div class="Servicesmainmain">
                            <img src="{{asset('web/images/service_1.png')}}" class="img-fluid"/>
                            <small>Instagram Followers</small>
                            <p>
                                Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                                trud exerci tation
                            </p>
                            <a href="buy_instagram_followers.html"
                            ><i class="fa-solid fa-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="hover-switch wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <div class="Servicesmainmain Servicesmainmain2">
                            <img src="{{asset('web/images/service_2.png')}}" class="img-fluid"/>
                            <small>Instagram Likes </small>
                            <p>
                                Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                                trud exerci tation
                            </p>
                            <a href="buy_instagram_like.html"
                            ><i class="fa-solid fa-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="hover-switch wow zoomIn borderright0"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <div class="Servicesmainmain Servicesmainmain3">
                            <img src="{{asset('web/images/service_3.png')}}" class="img-fluid"/>
                            <small>Instagram Views</small>
                            <p>
                                Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                                trud exerci tation
                            </p>
                            <a href="buy_instagram_views.html"
                            ><i class="fa-solid fa-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="hover-switch wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <div class="Servicesmainmain Servicesmainmain4">
                            <img src="{{asset('web/images/service_4.png')}}" alt=""/>
                            <small>Instagram Comments</small>
                            <p>
                                Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                                trud exerci tation
                            </p>
                            <a href="buy_instagram_comments.html"
                            ><i class="fa-solid fa-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="hover-switch wow zoomIn"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <div class="Servicesmainmain Servicesmainmain5">
                            <img src="{{asset('web/images/service_5.png')}}" class="img-fluid"/>
                            <small>Instagram TV</small>
                            <p>
                                Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                                trud exerci tation
                            </p>
                            <a href="buy_instagram_views.html"
                            ><i class="fa-solid fa-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div
                            class="hover-switch wow zoomIn borderright0"
                            data-wow-duration="2s"
                            style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
                    >
                        <div class="Servicesmainmain Servicesmainmain6">
                            <img src="{{asset('web/images/service_6.png')}}" class="img-fluid"/>
                            <small>Instagram Reels</small>
                            <p>
                                Pore et dolore magna aliqua. Ut enim ad minim veniam, quis nos
                                trud exerci tation
                            </p>
                            <a href="buy_instagram_followers.html"
                            ><i class="fa-solid fa-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- serviceman sec end  -->

    <!-- Testimonials Start -->
    <section class="test">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="testimonial wow fadeInLeft" data-wow-duration="2s">
                                <div>
                                    <div class="cus_test1">
                                        <h5>TESTIMONAIL</h5>
                                        <h2>They are awesome!</h2>
                                        <p>
                                            Kollit a do eiusmod tempor incididunt ut labore et do
                                            irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.
                                        </p>
                                        <h4>John Doe</h4>
                                    </div>
                                </div>

                                <div>
                                    <div class="cus_test1">
                                        <h5>TESTIMONAIL</h5>
                                        <h2>They are awesome!</h2>
                                        <p>
                                            Kollit a do eiusmod tempor incididunt ut labore et do
                                            irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.
                                        </p>
                                        <h4>John Doe</h4>
                                    </div>
                                </div>

                                <div>
                                    <div class="cus_test1">
                                        <h5>TESTIMONAIL</h5>
                                        <h2>They are awesome!</h2>
                                        <p>
                                            Kollit a do eiusmod tempor incididunt ut labore et do
                                            irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.
                                        </p>
                                        <h4>John Doe</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="cus_test2 wow fadeInRight" data-wow-duration="2s">
                                <img src="{{asset('web/images/laptop1.png')}}" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End -->

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
                                <h4>CONTACT US</h4>
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
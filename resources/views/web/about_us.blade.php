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
                 About Us
                </h2>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->

    <!-- instagram sec  start -->
    <section class="instagram_sec ab">
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
              <h3>Lorem Ipsum</h3>
              <h6>
                Lorem ipsum dolor sit amet consectetur adipisicing, elit. Voluptatum error et ea! Beatae, 
              </h6>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing, elit. Voluptatum error et ea! Beatae, eaque consequuntur, commodi modi rerum tempore quas repellat soluta dignissimos enim neque. Quibusdam sequi necessitatibus sapiente repudiandae!

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
                  <img src="{{asset('web/images/insta_sec1.png')}}" class="img-fluid" />
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
                  <img src="{{asset('web/images/insta_sec2.png')}}" class="img-fluid" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- instagaram  end  -->

@endsection
@section('css')
@endsection
@section('js')
@endsection
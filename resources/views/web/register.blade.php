@extends('web.layouts.main')
@section('content') 
    <!-- banner start -->
    <section class="login_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
            <div class="main_login">
              <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="login_text text-center">
                    <h3>Login</h3>
                    <p>
                      By signing up you can get special services for members
                      only.
                    </p>
                    <a href="{{route('login')}}">Login</a>
                  </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="login_fild">
                      <h3>Register</h3>
        <form class="needs-validation" method="POST" action="{{route('registration_submit')}}" >

            @csrf

            <input type="hidden" name="is_active" value="0">                      
                      <input type="text" placeholder="Name" required name="username"value="{{ old('username') }}"/>
                      <input type="email" placeholder="E-Mail" id="email" required name="email"value="{{ old('email') }}"/>
                      <input type="password" placeholder="Password" required name="password"value="{{ old('password') }}"/>
                      <!-- <a href="{{route('register')}}">Register</a> -->
                      <button type="submit"> Create Account </button>
        </form>              
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
<script>
    $("#email").focusout(function(){

      var type = "duplicate";

      var table = "user";

      var value = $(this).val();

      var like = $(this);



        if (value != "") {

        $.ajaxSetup({

            headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

          });

          $.ajax({

            type: 'post',

            dataType : 'json',

            url: "{{route('validator_check')}}",

            data: {type:type , value:value,table:table},

              success: function (response) {

                if (response.status == 0) {

                  $(like).addClass("is-invalid")

                  $(like).removeClass("is-valid")

                  $(like).prop("placeholder" , value)

                  $(like).val("")

                  toastr.error(response.message);



                }else{

                  $(like).addClass("is-valid")

                  $(like).removeClass("is-invalid")

                }

                return false;

              }

          });

        }

      

    })

</script>
@endsection
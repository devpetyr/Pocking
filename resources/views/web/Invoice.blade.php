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
                        <h3>Order Details</h3>
                        <div class="container">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Likes</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{ asset('web/images/users-1.jpg') }}" width="50px"></td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->likes }}</td>
                                </tr>

                                </tbody>
                            </table>
                            <a href="{{ route('check_out') }}">Pay Now</a>
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

@extends('admin.layouts.main')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_orders')}}">orders-List</a></li>
{{--                <li class="breadcrumb-item active" aria-current="page">orders-Add</li>--}}
            </ol>
        </nav>
{{--        <div class="d-flex justify-content-between w-100 flex-wrap">--}}
{{--            <div class="mb-3 mb-lg-0">--}}
{{--                <h1 class="h4">Orders Details</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row">
            <div class="col-sm-6">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3 mb-lg-0">
                                    <h1 class="heading_chat">Order Details</h1>
                                </div>
                                <!-- Form -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success mb-4" id="success-alert">
                                        <center><span class="text-white">{{Session::get('success')}}</span></center>
                                    </div>
                                @endif
                                <ul class="none_list">
                                    <li><img src="{{asset('web/images/'.$order->image)}}" alt="{{ $order->image}}"></li>
                                    <li>Post ID : {{ $order->post_id }}</li>
                                    <li>Post Link : {{ $order->post_link }}</li>
                                    <li>Invoice : {{ $order->invoice_number }}</li>
                                    <li>Payment : {{ $order->payment_id }}</li>
                                    <li>Price : {{ $order->price }}</li>
                                    <li>likes : {{ $order->likes }}</li>
                                </ul>
                                <!-- End of Form -->
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3 mb-lg-0">
                                    <h1 class="heading_chat">User Details</h1>
                                </div>
                                <!-- Form -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success mb-4" id="success-alert">
                                        <center><span class="text-white">{{Session::get('success')}}</span></center>
                                    </div>
                                @endif
                                <ul class="none_list">
                                    <li>Name : {{ $order->get_user->username }}</li>
                                    <li>Email : {{ $order->get_user->email }}</li>
                                    <li>Instagram Email : {{ $order->instagram_email }}</li>
                                    <li>Instagram ID : {{ $order->instagram_id }}</li>
                                </ul>
                                <!-- End of Form -->
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3 mb-lg-0">
                                    <h1 class="heading_chat">Product Details</h1>
                                </div>
                                <!-- Form -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success mb-4" id="success-alert">
                                        <center><span class="text-white">{{Session::get('success')}}</span></center>
                                    </div>
                                @endif
                                <ul class="none_list">
                                    <li>Title : {{ $order->get_product->title }}</li>
                                    <li>Likes : {{ $order->get_product->likes }}</li>
                                    <li>Price : {{ $order->get_product->price }}</li>
                                    {{--                                    <li>Instagram ID : {{ $order->get_product->instagram_id }}</li>--}}
                                </ul>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

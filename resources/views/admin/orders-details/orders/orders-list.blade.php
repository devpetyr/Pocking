@extends('admin.layouts.main')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item active" aria-current="page">orders</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">orders-List</h1>
            </div>
{{--            <div>--}}
{{--                <a href="{{route('admin_orders_add')}}" class="btn btn-outline-gray"><i class="far fa-plus-square mr-1"></i> Add New Product</a>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="card border-light shadow-sm mb-4">
        <div class="card-body">
            @if(Session::has('delete'))
                <div class="alert alert-danger mb-4" id="success-alert">
                    <center><span class="text-white">{{Session::get('delete')}}</span></center>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded" id="table_id">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0">#</th>
                        <th class="border-0">Image</th>
                        <th class="border-0">Invoice Number</th>
                        <th class="border-0">Likes</th>
                        <th class="border-0">Price</th>
                        <th class="border-0">Date</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item -->
                    <!-- Start of Item -->
                    @foreach($orders as $key=>$value)
{{--                        @dd($value)--}}
                        <tr>
                            <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{$key+1}}</a> </td>
                            <td class="border-0 font-weight-bold"><img src="{{$value->image}}" alt="{{$value->image}}"></td>
                            <td class="border-0 font-weight-bold">{{$value->invoice_number}}</td>
                            <td class="border-0">{{$value->likes}}</td>
                            <td class="border-0">${{$value->price}}</td>
                            <td class="border-0">{{date('d-m-Y', strtotime($value->created_at))}}</td>
                            <td class="border-0 font-weight-bold">
                                <span class="{{$value->status == 1 ? 'text-success' : 'text-danger'}}">{{$value->status == 1 ? 'Active' : 'Inactive'}}</span>
                            </td>
                            <td class="border-0">
                                <a href="{{route('admin_orders_edit').'/'.$value->id}}" class="text-secondary mr-3"><i class="fas fa-edit"></i>Edit</a>
                                <span class="text-primary"> |  </span>
                                <a href="{{route('admin_orders_details').'/'.$value->id}}" class="text-danger ml-3"><i class="fas fa-edit"></i>Details</a>
                            </td>
                        </tr>
                    @endforeach
                    <!-- End of Item -->
                    <!-- Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endpush

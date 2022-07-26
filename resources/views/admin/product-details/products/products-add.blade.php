@extends('admin.layouts.main')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_products')}}">Product-List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product-Add</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Product Add</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-12 col-sm-12">
                                <!-- Form -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success mb-4" id="success-alert">
                                        <center><span class="text-white">{{Session::get('success')}}</span></center>
                                    </div>
                                @endif
                                <form action="{{route('admin_products_add_edit')}}" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-4">
                                                <label class="my-1 mr-2" for="country">Sub Category</label>
                                                <select class="form-select" id="parent_category" name="sub_categories">
                                                    <option selected hidden disabled>Select Sub Category</option>
                                                    @foreach($sub_categories as $values)
                                                        <option value="{{$values->id}}">{{$values->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" required name="title" placeholder="Enter your title...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Likes</label>
                                                <input type="number" class="form-control" required name="likes" placeholder="Enter your likes...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Price</label>
                                                <input type="text" class="form-control" required name="price" placeholder="Enter your price...">
                                            </div>
                                            <fieldset class="my-4">
                                                <legend class="h6">Status</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked="">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>

                                    </div>
                                    <div class="my-4">
                                        <button class="btn btn-pill btn-outline-success" type="submit">Submit</button>
                                    </div>

                                </form>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

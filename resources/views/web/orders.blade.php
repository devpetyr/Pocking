@extends('web.layouts.main')
@section('content')
    <section class="login_sec table_sec">
      <div class="container">


                      <h3>Orders</h3>
                      <table id="example" class="display" style="width:100%">
                          <thead>
                          <tr>
                              <th>Instagram Image</th>
                              <th>Instagram Email</th>
                              <th>Instagram ID</th>
                              <th>Total Like</th>
                              <th>Total Price</th>
                              <th>Invoice Number</th>


                          </tr>
                          </thead>
                          <tbody>
{{--                          @dd($order)--}}
                          @if(count($order) >= 1)
                              @foreach($order as $item)
                                  <tr>

                                      <td> <img src="{{asset('web/images/'.$item->image)}}" alt="{{$item->image}}" alt="{{ $item->image }}" width="70px"></td>
                                      <td>{{ $item->instagram_email }}</td>
                                      <td>{{ $item->instagram_id }}</td>
                                      <td>{{ $item->likes }}</td>
                                      <td>${{ $item->price }}</td>
                                      <td>{{ $item->invoice_number }}</td>


                                  </tr>
                              @endforeach
                          @else
                              <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>Orders Empty</td>
                                  <td></td>
                                  <td></td>
                              </tr>
                          @endif
                          </tbody>
                          <tfoot>
                          <tr>
                              <th>Instagram Image</th>
                              <th>Instagram Email</th>
                              <th>Instagram ID</th>
                              <th>Total Like</th>
                              <th>Total Price</th>
                              <th>Invoice Number</th>
                          </tr>
                          </tfoot>
                      </table>


      </div>
    </section>
@endsection
@section('css')
@endsection
@section('js')
@endsection

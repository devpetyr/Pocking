@extends('web.layouts.main')
@section('content')
    <section class="login_sec table_sec">
      <div class="container">


                      <h3>Orders</h3>
                      <table id="example" class="display" style="width:100%">
                          <thead>
                          <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                          </tr>
                          </thead>
                          <tbody>
                          @if(count($order) >= 1)
                              <tr>
                                  <td>Tiger Nixon</td>
                                  <td>System Architect</td>
                                  <td>Edinburgh</td>
                                  <td>61</td>
                                  <td>2011-04-25</td>
                                  <td>$320,800</td>
                              </tr>
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
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
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

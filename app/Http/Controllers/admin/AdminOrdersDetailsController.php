<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrdersModel;
use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
//use App\Models\ordersImageModel;
//use App\Models\SubordersModel;
//use App\Models\orderssModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminOrdersDetailsController extends Controller
{
    /**-------------------------------orders Functions------------------------------------*/
    function orders_list()
    {
        $orders = OrdersModel::get();
        return view('admin.orders-details.orders.orders-list',compact('orders'));
    }
    function orders_add()
    {
        return view('admin.orders-details.orders.orders-add');
    }
    function orders_edit($id)
    {
        $orders = ordersModel::where('id',$id)->first();
        return view('admin.orders-details.orders.orders-edit',compact('orders'));
    }
    function orders_delete(ordersModel $orders)
    {
        $orders->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function orders_add_edit(Request $request,ordersModel $id)
    {
        $id->status = $request->status;
        $id->save();
        return back()->with('update','Updated Successfully');
    }
    function orders_details(ordersModel $id)
    {
//        dd($id);
        $user=User::where('id',$id->user_id)->first();
        return view('admin.orders-details.orders.orders-details',compact('id' ,'user'));
    }


}

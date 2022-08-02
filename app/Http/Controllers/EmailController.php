<?php

namespace App\Http\Controllers;

use App\Models\OrdersModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function send_mail_user($id)
    {
        $order=OrdersModel::where('id',$id)->first();
        $user=User::where('id', $order->user_id)->first();
        $details = $order;
        \Mail::to($user->email)->send(new \App\Mail\UserConfirmOrder($details));
        return $this->send_mail_admin($order);
    }
    public function send_mail_admin($order)
    {
        $admin=User::where('user_role', 1)->first();
        $details = $order;
        \Mail::to($admin->email)->send(new \App\Mail\AdminConfirmOrder($details));
        session()->forget('cart');
        return redirect()->route('home')->with('message', 'Order Successfull');
    }
}

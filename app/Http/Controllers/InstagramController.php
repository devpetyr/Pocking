<?php

namespace App\Http\Controllers;

use App\Models\OrdersModel;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function instagram_login()
    {
        $appId = env('INSTAGRAM_CLIENT_ID');
        $redirectUri = env('INSTAGRAM_REDIRECT_URI');
//        $redirectUri = route('instagram_login_thankyou');
        return redirect()->to("https://api.instagram.com/oauth/authorize?app_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
    }
    public function instagram_login_thankyou(Request $request)
    {
        dd($request);
    }
    public function instagram_user($id)
    {
        $product=ProductsModel::where('id',$id)->first();
        $session=[
            'package_id'=>$id,
        ];
        session()->put('cart',$session);
//        dd(session()->get('cart'));
        return view('web.instagram_users',compact('product'));
    }
    public function instagram_user_details(Request $request)
    {
        $request->validate(array(
            'instagram_email' => 'required|email',
            'Instagram_id' => 'required',
        ));
            $session=session()->get('cart');
            $session['instagram_email']=$request->instagram_email;
            $session['Instagram_id']=$request->Instagram_id;
            session()->put('cart',$session);
        $product=ProductsModel::where('id',$session['package_id'])->first();
            return view('web.instagram_users_profile',compact('product'));
    }
    public function user_profile_data($id)
    {
//        dd($id);
        $session=session()->get('cart');
        $session['image_id']=$id;
        session()->put('cart',$session);
//        dd(session()->get('cart'));
        $product=ProductsModel::where('id',$session['package_id'])->first();
        return view('web.checkout',compact('product'));
    }
    public function invoice()
    {
        $session=session()->get('cart');
        $product=ProductsModel::where('id',$session['package_id'])->first();
        return view('web.invoice',compact('product'));
    }
    public function check_out()
    {
        $session=session()->get('cart');
        $product=ProductsModel::where('id',$session['package_id'])->first();

        $order=new OrdersModel;
        $order->user_id=Auth()->user()->id;
        $order->product_id=$session['package_id'];
        $order->invoice_number=rand('111111111','999999999');
        $order->payment_id="xyz";
        $order->price=$product->price;
        $order->likes=$product->likes;
        $order->instagram_email=$session['instagram_email'];
        $order->instagram_id=$session['Instagram_id'];
        $order->image=$session['image_id'];
        $order->save();
        return redirect()->route('send_mail_user',[$order->id]);
    }
}

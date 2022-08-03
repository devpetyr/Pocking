<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login_data(Request $request)
    {
        $request->validate(array(
            'email' => 'required|email',
            'password' => 'required',
        ));

        $user=User::where('email',$request->email)->where('status',1)->first();
        if($user)
        {
            if($user->user_role == 2)
            {
                if($user->is_active == 1)
                {

                    if (Hash::check($request->password,$user->password))
                    {
                        Auth::login($user);
                        return redirect()->route('home')->with('message', 'login Successfully');
                    }
                        else
                    {
                        session()->flash('passwordNotFound');
                        return back();
                    }
                }
                else
                {
                    session()->flash('emailActive');
                    return back();
                }
            }
            else
            {
                session()->flash('emailNotfound');
                return back();
            }

        }
        else
        {
            session()->flash('emailNotfound');
            return back();
        }



    }
    public function user_logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('message', 'Logout Successfully');
    }
    public function update_profile(Request $request)
    {
        $request->validate(array(
            'old_password'=>'required',
            'password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',

        ));

        if (Hash::check($request->old_password,Auth::user()->password))
        {
            $user=User::where('id',Auth::user()->id)->first();
            $user->password=Hash::make($request->password);
            $user->save();
            if($user->save())
            {
                return back()->with('message', 'Password Change Successfully');
            }
        }
        else
        {
            session()->flash('oldPasswordNotFound');
            return back();
        }

    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BannerModel;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = BannerModel::where('is_active',1)->find(1);   
        return view("web.index")->with("title","Home")->with(compact("banner"));
    }   public function about_us()
    {
        return view("web.about_us")->with("title","About Us");
    }public function buy_instagram_comments()
    {
        return view("web.buy_instagram_comments")->with("title","Buy Instagram Comments");
    }public function buy_instagram_followers()
    {
        return view("web.buy_instagram_followers")->with("title","Buy Instagram Followers");
    }public function buy_instagram_like()
    {
        return view("web.buy_instagram_like")->with("title","Buy Instagram Like");
    }public function buy_instagram_views()
    {
        return view("web.buy_instagram_views")->with("title","Buy Instagram Views");
    }public function contact_us()
    {
        return view("web.contact_us")->with("title","Contact Us");
    }public function custom_instagram_comments()
    {
        return view("web.custom_instagram_comments")->with("title","Buy Instagram Comments");
    }public function forgot()
    {
        return view("web.forgot")->with("title","Forgot Password");
    }public function login()
    {
        return view("web.login")->with("title","Login");
    }public function privacy()
    {
        return view("web.privacy")->with("title","Privacy Policy");
    }public function register()
    {
        return view("web.register")->with("title","Register");
    }public function term()
    {
        return view("web.term")->with("title","Terms And Conditions");
    }
}

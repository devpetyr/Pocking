<?php

use App\Http\Controllers\admin\AdminOrdersDetailsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminBannerController;
use App\Http\Controllers\admin\AdminBlogsController;
use App\Http\Controllers\admin\AdminTestimonialsController;
use App\Http\Controllers\admin\AdminServicesController;
use App\Http\Controllers\admin\AdminProductDetailsController;
use \App\Http\Controllers\InstagramController;
use \App\Http\Controllers\EmailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect()->route('admin_login');
});
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
/*---------------------------------------Frontend-Routes---------------------------------------------- */
// IndexController
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about-us', [IndexController::class, 'about_us'])->name('about_us');
Route::get('/buy-instagram-comments', [IndexController::class, 'buy_instagram_comments'])->name('buy_instagram_comments');
Route::get('/buy-instagram-followers', [IndexController::class, 'buy_instagram_followers'])->name('buy_instagram_followers');
Route::get('/buy-instagram-like', [IndexController::class, 'buy_instagram_like'])->name('buy_instagram_like');
Route::get('/buy-instagram-views', [IndexController::class, 'buy_instagram_views'])->name('buy_instagram_views');
Route::get('/contact-us', [IndexController::class, 'contact_us'])->name('contact_us');
Route::get('/custom-instagram-comments', [IndexController::class, 'custom_instagram_comments'])->name('custom_instagram_comments');
Route::get('/forgot', [IndexController::class, 'forgot'])->name('forgot');
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/privacy-policy', [IndexController::class, 'privacy'])->name('privacy');
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/terms-and-conditions', [IndexController::class, 'term'])->name('term');


// RegistrationController
Route::post('/registration-submit', [RegistrationController::class, 'registration_submit'])->name('registration_submit');
Route::get('confirm-email/{id}/{email}', [RegistrationController::class, 'confirm_email'])->name('confirm_email');
Route::post('validator', [RegistrationController::class, 'validator_check'])->name('validator_check');
/*---------------------------------------Admin-Routes---------------------------------------------- */
/**Auth Routes */
    Route::get('/admin-login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::post('/admin/login-data', [AdminAuthController::class, 'login_data'])->name('login_data_page');
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');

    // User Auth Routes
    Route::post('/login-data', [LoginController::class, 'login_data'])->name('login_data');
    Route::get('/user-logout', [LoginController::class, 'user_logout'])->name('user_logout');
//User Auth Middleware Start
Route::group(['middleware'=>['protectedUser']], function (){
    Route::get('/my-profile', [IndexController::class, 'my_profile'])->name('my_profile');
    Route::post('/update-profile', [LoginController::class, 'update_profile'])->name('update_profile');
    Route::get('/order', [IndexController::class, 'user_order'])->name('user_order');
    Route::get('/instagram-user/{id?}', [InstagramController::class, 'instagram_user'])->name('instagram_user');
    Route::post('/instagram-user-details', [InstagramController::class, 'instagram_user_details'])->name('instagram_user_details');
    Route::get('/user-profile-data/{id?}', [InstagramController::class, 'user_profile_data'])->name('user_profile_data');
    Route::get('/check-out', [InstagramController::class, 'check_out'])->name('check_out');
    Route::get('/invoice', [InstagramController::class, 'invoice'])->name('invoice');
    Route::get('/send-mail-user/{id}', [EmailController::class, 'send_mail_user'])->name('send_mail_user');

    //for instagram login
    Route::get('/instagram-connect-account', [InstagramController::class, 'instagram_login'])->name('instagram_login');
    Route::get('/thank-you', [InstagramController::class, 'instagram_login_thankyou'])->name('instagram_login_thankyou');
});
//User Auth Middleware End

/**Admin Auth Middleware Starts */
Route::group(['middleware'=>['protectedPage']], function(){
    /**Dashboard Routes */
        Route::get('/admin/dashboard', [AdminBannerController::class, 'dashboard'])->name('admin_dashboard');
    /**Profile Routes */
        Route::get('/admin/profile', [AdminAuthController::class, 'admin_profile'])->name('admin_profile');
        Route::post('/admin/profile-update/{user?}', [AdminAuthController::class, 'admin_profile_update'])->name('admin_profile_update');
        Route::post('/admin/profile-pass-update/{user?}', [AdminAuthController::class, 'admin_password_update'])->name('admin_password_update');
    /**Banner Routes */
        Route::get('/admin/banner-list', [AdminBannerController::class, 'banner'])->name('admin_banners');
        Route::get('/admin/banner-add', [AdminBannerController::class, 'banner_add'])->name('admin_banners_add');
        Route::get('/admin/banner-edit/{id?}', [AdminBannerController::class, 'banner_edit'])->name('admin_banners_edit');
        Route::get('/admin/banner-delete/{banner?}', [AdminBannerController::class, 'banner_delete'])->name('admin_banners_delete');
        Route::post('/admin/banner-add-edit/{banner?}', [AdminBannerController::class, 'banner_add_edit_data'])->name('admin_banners_add_edit');
    /**Blogs Routes */
        Route::get('/admin/blog-list', [AdminBlogsController::class, 'blog_list'])->name('admin_blogs');
        Route::get('/admin/blog-add', [AdminBlogsController::class, 'blog_add'])->name('admin_blogs_add');
        Route::get('/admin/blog-edit/{id?}', [AdminBlogsController::class, 'blog_edit'])->name('admin_blogs_edit');
        Route::get('/admin/blog-delete/{blog?}', [AdminBlogsController::class, 'blog_delete'])->name('admin_blogs_delete');
        Route::post('/admin/blog-add-edit/{blog?}', [AdminBlogsController::class, 'blog_add_edit_data'])->name('admin_blogs_add_edit');
    /**Testimonials Routes */
        Route::get('/admin/testimonial-list', [AdminTestimonialsController::class, 'testimonial_list'])->name('admin_testimonials');
        Route::get('/admin/testimonial-add', [AdminTestimonialsController::class, 'testimonial_add'])->name('admin_testimonials_add');
        Route::get('/admin/testimonial-edit/{id?}', [AdminTestimonialsController::class, 'testimonial_edit'])->name('admin_testimonials_edit');
        Route::get('/admin/testimonial-delete/{testimonial?}', [AdminTestimonialsController::class, 'testimonial_delete'])->name('admin_testimonials_delete');
        Route::post('/admin/testimonial-add-edit/{testimonial?}', [AdminTestimonialsController::class, 'testimonial_add_edit_data'])->name('admin_testimonials_add_edit');
    /**Services Routes */
        Route::get('/admin/service-list', [AdminServicesController::class, 'service_list'])->name('admin_services');
        Route::get('/admin/service-add', [AdminServicesController::class, 'service_add'])->name('admin_services_add');
        Route::get('/admin/service-edit/{id?}', [AdminServicesController::class, 'service_edit'])->name('admin_services_edit');
        Route::get('/admin/service-delete/{service?}', [AdminServicesController::class, 'service_delete'])->name('admin_services_delete');
        Route::post('/admin/service-add-edit/{service?}', [AdminServicesController::class, 'service_add_edit_data'])->name('admin_services_add_edit');
    /**User Routes*/
        Route::get('/admin/user-list', [AdminAuthController::class, 'user_list'])->name('admin_users');
        Route::get('/admin/user-add', [AdminAuthController::class, 'user_add'])->name('admin_users_add');
        Route::get('/admin/user-edit/{id?}', [AdminAuthController::class, 'user_edit'])->name('admin_users_edit');
        Route::get('/admin/user-delete/{user?}', [AdminAuthController::class, 'user_delete'])->name('admin_users_delete');
        Route::post('/admin/user-add-edit/{user?}', [AdminAuthController::class, 'user_add_edit_data'])->name('admin_users_add_edit');
    /**Orders Routes */
    Route::get('/admin/orders-list', [AdminOrdersDetailsController::class, 'orders_list'])->name('admin_orders');
    Route::get('/admin/categories-add', [AdminOrdersDetailsController::class, 'categories_add'])->name('admin_categories_add');
    Route::get('/admin/orders-edit/{id?}', [AdminOrdersDetailsController::class, 'orders_edit'])->name('admin_orders_edit');
    Route::get('/admin/orders-details/{id?}', [AdminOrdersDetailsController::class, 'orders_details'])->name('admin_orders_details');
    Route::post('/admin/orders-add-edit/{id?}', [AdminOrdersDetailsController::class, 'orders_add_edit'])->name('admin_orders_add_edit');
    /**Product Detail Routes*/
        /**Categories Routes */
            Route::get('/admin/categories-list', [AdminProductDetailsController::class, 'categories_list'])->name('admin_categories');
            Route::get('/admin/categories-add', [AdminProductDetailsController::class, 'categories_add'])->name('admin_categories_add');
            Route::get('/admin/categories-edit/{id?}', [AdminProductDetailsController::class, 'categories_edit'])->name('admin_categories_edit');
            Route::get('/admin/categories-delete/{categories?}', [AdminProductDetailsController::class, 'categories_delete'])->name('admin_categories_delete');
            Route::post('/admin/categories-add-edit/{categories?}', [AdminProductDetailsController::class, 'categories_add_edit_data'])->name('admin_categories_add_edit');
        /**Sub-Categories Routes */
            Route::get('/admin/sub-categories-list', [AdminProductDetailsController::class, 'sub_categories_list'])->name('admin_sub_categories');
            Route::get('/admin/sub-categories-add', [AdminProductDetailsController::class, 'sub_categories_add'])->name('admin_sub_categories_add');
            Route::get('/admin/sub-categories-edit/{id?}', [AdminProductDetailsController::class, 'sub_categories_edit'])->name('admin_sub_categories_edit');
            Route::get('/admin/sub-categories-delete/{sub_categories?}', [AdminProductDetailsController::class, 'sub_categories_delete'])->name('admin_sub_categories_delete');
            Route::post('/admin/sub-categories-add-edit/{sub_categories?}', [AdminProductDetailsController::class, 'sub_categories_add_edit_data'])->name('admin_sub_categories_add_edit');
        /**Products Routes */
            Route::get('/admin/products-list', [AdminProductDetailsController::class, 'products_list'])->name('admin_products');
            Route::get('/admin/products-add', [AdminProductDetailsController::class, 'products_add'])->name('admin_products_add');
            Route::get('/admin/products-edit/{id?}', [AdminProductDetailsController::class, 'products_edit'])->name('admin_products_edit');
            Route::get('/admin/products-delete/{products?}', [AdminProductDetailsController::class, 'products_delete'])->name('admin_products_delete');
            Route::post('/admin/products-add-edit/{products?}', [AdminProductDetailsController::class, 'products_add_edit_data'])->name('admin_products_add_edit');
});
/**Admin Auth Middleware Ends */

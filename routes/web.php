<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('layouts.website');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // return view('dashboard');
//     return view('layouts.admin');

// })->name('dashboard');


// admin
Route::group(['prefix' => 'admin','middleware' => 'auth'],function () {
    Route::get('/', 'AdminController@index')->name('admin');
});

Route::match(['get', 'post'], 'loginweb', 'WebsiteController@loginweb')->name('loginweb');

Route::get('/demo', 'DemoController@demo')->name('demo');
Route::get('/demo-add', 'DemoController@demo_add')->name('demo_add');
// Route::get('/demo_add', 'DemoController@demo_add')->name('demo_add');
// Route::get('/demo_add', 'DemoController@demo_add')->name('demo_add');
// Route::get('/demo_add', 'DemoController@demo_add')->name('demo_add');

// user
Route::group(['prefix' => 'user','middleware' => 'auth'],function () {
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/add', 'UserController@add')->name('user_add');
    Route::post('/user/submit', 'UserController@insert')->name('user_insert');
    Route::get('/user-view/{id}', 'UserController@view')->name('user_view');
    Route::get('/user-delete/{id}', 'UserController@delete')->name('user_delete');
    Route::get('/user-edit/{id}', 'UserController@edit')->name('user_edit');
    Route::post('/user-update', 'UserController@update')->name('user_update');
});
// userrole
Route::group(['prefix' => 'userrole','middleware' => 'auth'],function () {
    Route::get('/userrole', 'UserRoleController@index')->name('userrole');
    Route::get('/userrole/add', 'UserRoleController@add')->name('userrole_add');
    Route::post('/userrole/submit', 'UserRoleController@insert')->name('userrole_insert');
    Route::get('/userrole-view/{id}', 'UserRoleController@view')->name('userrole_view');
    Route::get('/userrole-delete/{id}', 'UserRoleController@delete')->name('userrole_delete');
    Route::get('/userrole-edit/{id}', 'UserRoleController@edit')->name('userrole_edit');
    Route::post('/userrole-update', 'UserRoleController@update')->name('userrole_update');
});
// banner
Route::group(['prefix' => 'banner','middleware' => 'auth'],function () {
    Route::get('/banner', 'BannerController@index')->name('banner');
    Route::get('/banner/add', 'BannerController@add')->name('banner_add');
    Route::post('/banner/submit', 'BannerController@insert')->name('banner_insert');
    Route::get('/banner-view/{id}', 'BannerController@view')->name('banner_view');
    Route::get('/banner-delete/{id}', 'BannerController@delete')->name('banner_delete');
    Route::get('/banner-edit/{id}', 'BannerController@edit')->name('banner_edit');
    Route::post('/banner-update', 'BannerController@update')->name('banner_update');
});
// category
Route::group(['prefix' => 'category','middleware' => 'auth'],function () {
    Route::get('/category', 'CategoryController@index')->name('category');
    Route::get('/category/add', 'CategoryController@add')->name('category_add');
    Route::post('/category/submit', 'CategoryController@insert')->name('category_insert');
    Route::get('/category-view/{id}', 'CategoryController@view')->name('category_view');
    Route::get('/category-delete/{id}', 'CategoryController@delete')->name('category_delete');
    Route::get('/category-edit/{id}', 'CategoryController@edit')->name('category_edit');
    Route::post('/category-update', 'CategoryController@update')->name('category_update');
});
// subcategory
Route::group(['prefix' => 'subcategory','middleware' => 'auth'],function () {
    Route::get('/subcategory', 'SubCategoryController@index')->name('subcategory');
    Route::get('/subcategory/add', 'SubCategoryController@add')->name('subcategory_add');
    Route::post('/subcategory/submit', 'SubCategoryController@insert')->name('subcategory_insert');
    Route::get('/subcategory-view/{id}', 'SubCategoryController@view')->name('subcategory_view');
    Route::get('/subcategory-delete/{id}', 'SubCategoryController@delete')->name('subcategory_delete');
    Route::get('/subcategory-edit/{id}', 'SubCategoryController@edit')->name('subcategory_edit');
    Route::post('/subcategory-update', 'SubCategoryController@update')->name('subcategory_update');
});
// about
Route::group(['prefix' => 'about','middleware' => 'auth'],function () {
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/about/add', 'AboutController@add')->name('about_add');
    Route::post('/about/submit', 'AboutController@insert')->name('about_insert');
    Route::get('/about-view/{id}', 'AboutController@view')->name('about_view');
    Route::get('/about-delete/{id}', 'AboutController@delete')->name('about_delete');
    Route::get('/about-edit/{id}', 'AboutController@edit')->name('about_edit');
    Route::post('/about-update', 'AboutController@update')->name('about_update');
});



// blogcategory
Route::group(['prefix' => 'blogcategory','middleware' => 'auth'],function () {
    Route::get('/blogcategory', 'BlogCategoryController@index')->name('blogcategory');
    Route::get('/blogcategory/add', 'BlogCategoryController@add')->name('blogcategory_add');
    Route::post('/blogcategory/submit', 'BlogCategoryController@insert')->name('blogcategory_insert');
    Route::get('/blogcategory-view/{id}', 'BlogCategoryController@view')->name('blogcategory_view');
    Route::get('/blogcategory-delete/{id}', 'BlogCategoryController@delete')->name('blogcategory_delete');
    Route::get('/blogcategory-edit/{id}', 'BlogCategoryController@edit')->name('blogcategory_edit');
    Route::post('/blogcategory-update', 'BlogCategoryController@update')->name('blogcategory_update');
});
// blog
Route::group(['prefix' => 'blog','middleware' => 'auth'],function () {
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/add', 'BlogController@add')->name('blog_add');
    Route::post('/blog/submit', 'BlogController@insert')->name('blog_insert');
    Route::get('/blog-view/{id}', 'BlogController@view')->name('blog_view');
    Route::get('/blog-delete/{id}', 'BlogController@delete')->name('blog_delete');
    Route::get('/blog-edit/{id}', 'BlogController@edit')->name('blog_edit');
    Route::post('/blog-update', 'BlogController@update')->name('blog_update');
});
// product
Route::group(['prefix' => 'product','middleware' => 'auth'],function () {
    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/product/add', 'ProductController@add')->name('product_add');
    Route::post('/product/submit', 'ProductController@insert')->name('product_insert');
    Route::get('/product-view/{id}', 'ProductController@view')->name('product_view');
    Route::get('/product-delete/{id}', 'ProductController@delete')->name('product_delete');
    Route::get('/product-edit/{id}', 'ProductController@edit')->name('product_edit');
    Route::post('/product-update', 'ProductController@update')->name('product_update');

});
// featured-products
Route::group(['prefix' => 'featuredproducts','middleware' => 'auth'],function () {
    Route::get('/featuredproducts', 'FeaturedProductsController@index')->name('featuredproducts');
    Route::get('/featuredproducts/add', 'FeaturedProductsController@add')->name('featuredproducts_add');
    Route::post('/featuredproducts/submit', 'FeaturedProductsController@insert')->name('featuredproducts_insert');
    Route::get('/featuredproducts-view/{id}', 'FeaturedProductsController@view')->name('featuredproducts_view');
    Route::post('/featuredproducts-delete', 'FeaturedProductsController@delete')->name('featuredproducts_delete');
    Route::get('/featuredproducts-edit/{id}', 'FeaturedProductsController@edit')->name('featuredproducts_edit');
    Route::post('/featuredproducts-update', 'FeaturedProductsController@update')->name('featuredproducts_update');

});
// daydeal
Route::group(['prefix' => 'daydeal','middleware' => 'auth'],function () {
    Route::get('/daydeal', 'DayDealController@index')->name('daydeal');
    Route::get('/daydeal/add', 'DayDealController@add')->name('daydeal_add');
    Route::post('/daydeal/submit', 'DayDealController@insert')->name('daydeal_insert');
    Route::get('/daydeal-view/{id}', 'DayDealController@view')->name('daydeal_view');
    Route::post('/daydeal-delete', 'DayDealController@delete')->name('daydeal_delete');
    Route::get('/daydeal-edit/{id}', 'DayDealController@edit')->name('daydeal_edit');
    Route::post('/daydeal-update', 'DayDealController@update')->name('daydeal_update');

});
// equipmentcategory
Route::group(['prefix' => 'equipmentcategory','middleware' => 'auth'],function () {
    Route::get('/equipmentcategory', 'MedicalEquipmentController@index')->name('equipmentcategory');
    Route::get('/equipmentcategory/add', 'MedicalEquipmentController@add')->name('equipmentcategory_add');
    Route::post('/equipmentcategory/submit', 'MedicalEquipmentController@insert')->name('equipmentcategory_insert');
    Route::get('/equipmentcategory-view/{id}', 'MedicalEquipmentController@view')->name('equipmentcategory_view');
    Route::post('/equipmentcategory-delete', 'MedicalEquipmentController@delete')->name('equipmentcategory_delete');
    Route::get('/equipmentcategory-edit/{id}', 'MedicalEquipmentController@edit')->name('equipmentcategory_edit');
    Route::post('/equipmentcategory-update', 'MedicalEquipmentController@update')->name('equipmentcategory_update');

});
// equipmentcategory-image
Route::group(['prefix' => 'equipmentcategory-image','middleware' => 'auth'],function () {
    Route::get('/equipmentcategory-image', 'EquipmentCategoryImageController@index')->name('equipmentcategory_image');
    Route::get('/equipmentcategory-image/add', 'EquipmentCategoryImageController@add')->name('equipmentcategory_image_add');
    Route::post('/equipmentcategory-image/submit', 'EquipmentCategoryImageController@insert')->name('equipmentcategory_image_insert');
    Route::get('/equipmentcategory-image-view/{id}', 'EquipmentCategoryImageController@view')->name('equipmentcategory_image_view');
    Route::get('/equipmentcategory-image-delete/{id}', 'EquipmentCategoryImageController@delete')->name('equipmentcategory_image_delete');
    Route::get('/equipmentcategory-image-edit/{id}', 'EquipmentCategoryImageController@edit')->name('equipmentcategory_image_edit');
    Route::post('/equipmentcategory-image-update', 'EquipmentCategoryImageController@update')->name('equipmentcategory_image_update');

});
// Accessories
Route::group(['prefix' => 'accessories','middleware' => 'auth'],function () {
    Route::get('/accessories', 'AccessoriesController@index')->name('accessories');
    Route::get('/accessories/add', 'AccessoriesController@add')->name('accessories_add');
    Route::post('/accessories/submit', 'AccessoriesController@insert')->name('accessories_insert');
    Route::get('/accessories-view/{id}', 'AccessoriesController@view')->name('accessories_view');
    Route::post('/accessories-delete', 'AccessoriesController@delete')->name('accessories_delete');
    Route::get('/accessories-edit/{id}', 'AccessoriesController@edit')->name('accessories_edit');
    Route::post('/accessories-update', 'AccessoriesController@update')->name('accessories_update');

});

// accessories-image
Route::group(['prefix' => 'accessories-image','middleware' => 'auth'],function () {
    Route::get('/accessories-image', 'AccessoriesCategoryImageController@index')->name('accessories_image');
    Route::get('/accessories-image/add', 'AccessoriesCategoryImageController@add')->name('accessories_image_add');
    Route::post('/accessories-image/submit', 'AccessoriesCategoryImageController@insert')->name('accessories_image_insert');
    Route::get('/accessories-image-view/{id}', 'AccessoriesCategoryImageController@view')->name('accessories_image_view');
    Route::get('/accessories-image-delete/{id}', 'AccessoriesCategoryImageController@delete')->name('accessories_image_delete');
    Route::get('/accessories-image-edit/{id}', 'AccessoriesCategoryImageController@edit')->name('accessories_image_edit');
    Route::post('/accessories-image-update', 'AccessoriesCategoryImageController@update')->name('accessories_image_update');

});


// recentlyadded
Route::group(['prefix' => 'recentlyadded','middleware' => 'auth'],function () {
    Route::get('/recentlyadded', 'RecentlyAddedController@index')->name('recentlyadded');
    Route::get('/recentlyadded/add', 'RecentlyAddedController@add')->name('recentlyadded_add');
    Route::post('/recentlyadded/submit', 'RecentlyAddedController@insert')->name('recentlyadded_insert');
    Route::get('/recentlyadded-view/{id}', 'RecentlyAddedController@view')->name('recentlyadded_view');
    Route::post('/recentlyadded-delete', 'RecentlyAddedController@delete')->name('recentlyadded_delete');
    Route::get('/recentlyadded-edit/{id}', 'RecentlyAddedController@edit')->name('recentlyadded_edit');
    Route::post('/recentlyadded-update', 'RecentlyAddedController@update')->name('recentlyadded_update');

});


// footer
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/footer_one', 'FooterOneController@index')->name('footer_one');
    Route::get('/footer_one-add', 'FooterOneController@add')->name('footer_one_add');
    Route::post('/footer_one-insert', 'FooterOneController@insert')->name('footer_one_insert');
    Route::get('/footer_one-view/{id}', 'FooterOneController@view')->name('footer_one_view');
    Route::get('/footer_one-edit/{id}', 'FooterOneController@edit')->name('footer_one_edit');
    Route::post('/footer_one-update', 'FooterOneController@update')->name('footer_one_update');
    Route::get('/footer_one-delete/{id}', 'FooterOneController@delete')->name('footer_one_delete');

});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/footer_two', 'FooterTwoController@index')->name('footer_two');
    Route::get('/footer_two-add', 'FooterTwoController@add')->name('footer_two_add');
    Route::post('/footer_two-insert', 'FooterTwoController@insert')->name('footer_two_insert');
    Route::get('/footer_two-view/{id}', 'FooterTwoController@view')->name('footer_two_view');
    Route::get('/footer_two-edit/{id}', 'FooterTwoController@edit')->name('footer_two_edit');
    Route::post('/footer_two-update', 'FooterTwoController@update')->name('footer_two_update');
    Route::get('/footer_two-delete/{id}', 'FooterTwoController@delete')->name('footer_two_delete');

});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/footer_three', 'FooterThreeController@index')->name('footer_three');
    Route::get('/footer_three-add', 'FooterThreeController@add')->name('footer_three_add');
    Route::post('/footer_three-insert', 'FooterThreeController@insert')->name('footer_three_insert');
    Route::get('/footer_three-view/{id}', 'FooterThreeController@view')->name('footer_three_view');
    Route::get('/footer_three-edit/{id}', 'FooterThreeController@edit')->name('footer_three_edit');
    Route::post('/footer_three-update', 'FooterThreeController@update')->name('footer_three_update');
    Route::get('/footer_three-delete/{id}', 'FooterThreeController@delete')->name('footer_three_delete');

});


// logo
Route::group(['prefix' => 'logo', 'middleware' => 'auth'], function () {
    Route::get('/logo', 'LogoTitleController@index')->name('logo');
    Route::get('/logo-add', 'LogoTitleController@add')->name('logo_add');
    Route::post('/logo-store', 'LogoTitleController@insert')->name('logo_insert');
    Route::get('/logo-view/{id}', 'LogoTitleController@view')->name('logo_view');
    Route::get('/logo-edit/{id}', 'LogoTitleController@edit')->name('logo_edit');
    Route::post('/logo-update', 'LogoTitleController@update')->name('logo_update');
    Route::get('/logo-delete/{id}', 'LogoTitleController@delete')->name('logo_delete');
});
// Add Banner
Route::group(['prefix' => 'addbanner', 'middleware' => 'auth'], function () {
    Route::get('/addbanner', 'AddBannerController@index')->name('addbanner');
    Route::get('/addbanner-add', 'AddBannerController@add')->name('addbanner_add');
    Route::post('/addbanner-store', 'AddBannerController@insert')->name('addbanner_insert');
    Route::get('/addbanner-view/{id}', 'AddBannerController@view')->name('addbanner_view');
    Route::get('/addbanner-edit/{id}', 'AddBannerController@edit')->name('addbanner_edit');
    Route::post('/addbanner-update', 'AddBannerController@update')->name('addbanner_update');
    Route::get('/addbanner-delete/{id}', 'AddBannerController@delete')->name('addbanner_delete');
});
// ContactInformation
Route::group(['prefix' => 'contactinformation', 'middleware' => 'auth'], function () {
    Route::get('/contactinformation', 'ContactInformationController@index')->name('contactinformation');
    Route::get('/contactinformation-add', 'ContactInformationController@add')->name('contactinformation_add');
    Route::post('/contactinformation-store', 'ContactInformationController@insert')->name('contactinformation_insert');
    Route::get('/contactinformation-view/{id}', 'ContactInformationController@view')->name('contactinformation_view');
    Route::get('/contactinformation-edit/{id}', 'ContactInformationController@edit')->name('contactinformation_edit');
    Route::post('/contactinformation-update', 'ContactInformationController@update')->name('contactinformation_update');
    Route::get('/contactinformation-delete/{id}', 'ContactInformationController@delete')->name('contactinformation_delete');
});
// ContactMessages
Route::group(['prefix' => 'contactmessages', 'middleware' => 'auth'], function () {
    Route::get('/contactmessages', 'ContactMessageController@index')->name('contactmessages');
    Route::get('/contactmessages-add', 'ContactMessageController@add')->name('contactmessages_add');
    Route::post('/contactmessages-store', 'ContactMessageController@insert')->name('contactmessages_insert');
    Route::get('/contactmessages-view/{id}', 'ContactMessageController@view')->name('contactmessages_view');
    Route::get('/contactmessages-edit/{id}', 'ContactMessageController@edit')->name('contactmessages_edit');
    Route::post('/contactmessages-update', 'ContactMessageController@update')->name('contactmessages_update');
    Route::get('/contactmessages-delete/{id}', 'ContactMessageController@delete')->name('contactmessages_delete');
});

// Subscribe List
Route::group(['prefix' => 'subscribe', 'middleware' => 'auth'], function () {
    Route::get('/subscribe', 'SubscribeController@index')->name('subscribe');
    Route::get('/subscribe-add', 'SubscribeController@add')->name('subscribe_add');
    Route::post('/subscribe-store', 'SubscribeController@insert')->name('subscribe_insert');
    Route::get('/subscribe-view/{id}', 'SubscribeController@view')->name('subscribe_view');
    Route::get('/subscribe-edit/{id}', 'SubscribeController@edit')->name('subscribe_edit');
    Route::post('/subscribe-update', 'SubscribeController@update')->name('subscribe_update');
    Route::get('/subscribe-delete/{id}', 'SubscribeController@delete')->name('subscribe_delete');
});

// ContactMessages
Route::group(['prefix' => 'orderlist', 'middleware' => 'auth'], function () {
    Route::get('/orderlist', 'OrderInformationController@index')->name('orderlist');
    Route::get('/order-information', 'OrderInformationController@order_information')->name('order_information');
    Route::get('/checkout-information', 'OrderInformationController@checkout_information')->name('checkout_information');
});


Route::get('/get-product-subcat/{id}', 'ProductController@get_product_subcat')->name('get_product_subcat');

Route::get('/', 'WebsiteController@index');
Route::get('/web-about', 'WebsiteController@web_about')->name('web_about');

Route::get('/web-product', 'WebsiteController@web_product')->name('web_product');
Route::get('/web-product-details/{id}', 'WebsiteController@web_product_details')->name('web_product_details');
Route::get('/web-category-products/{category}', 'WebsiteController@web_category_products')->name('web_category_products');
Route::post('/get-web-subproduct', 'WebsiteController@get_web_subproduct')->name('get_web_subproduct');

Route::get('/web-blog', 'WebsiteController@web_blog')->name('web_blog');
Route::get('/web-blog-details/{id}', 'WebsiteController@web_blog_details')->name('web_blog_details');

Route::get('/web-contact', 'WebsiteController@web_contact')->name('web_contact');
Route::post('/contact-msg', 'WebsiteController@contact_msg')->name('web_contact_msg');

Route::get('/logintwo', 'WebsiteController@logintwo')->name('logintwo');

Route::get('/web-cart', 'WebsiteController@web_cart')->name('web_cart');
Route::get('/get-cart-product', 'WebsiteController@get_cart_product')->name('get_cart_product');

Route::post('/addto-cart/{product}', 'WebsiteController@addto_cart')->name('addto_cart');

Route::get('cart-update-page', 'WebsiteController@cart_update_page');
Route::get('cart/update', 'WebsiteController@cartUpdate');
Route::get('cart/product/remove/{rowid}', 'WebsiteController@cart_product_remove');

Route::get('/web-wishlist', 'WebsiteController@web_wishlist')->name('web_wishlist');
Route::post('/get-wishlist-product', 'WebsiteController@get_wishlist_product')->name('get_wishlist_product');
Route::post('/wishlist-remove', 'WebsiteController@wishlist_remove')->name('wishlist_remove');

Route::get('/web-checkout', 'WebsiteController@web_checkout')->name('web_checkout');
Route::post('/add-subscribe', 'WebsiteController@add_subscribe')->name('add_subscribe');

// checkout
Route::post('/checkout_save', 'CheckOutController@checkout_save')->name('checkout_save');
Route::get('/order-complete-message', 'CheckOutController@order_complete_message')->name('order_complete_message');

// Route::get('send-mail', function () {

//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     \Mail::to('shifatnaznin11@gmail.com')->send(new \App\Mail\SendMail($details));

//     dd("Email is Sent.");
// });

// vV~lAUa2bpoQ

<?php
use App\post;
Auth::routes();
Route::get('/', function () {
  //$shows = post::all();
  $shows = post::orderBy('created_at', 'desc')->take(10)->get();

  return view('index',compact('shows'));
});
//Route::get('/','HomeController@first');
Route::get('/salelogin', function () {
    return view('logins.salelogin');
});
Route::get('/dashboard', function () {
    return view('layouts.adminpanel');
});
Route::get('/salehome', function () {
    return view('layouts.sale');
});


Route::get('/showinfo', function () {
    return view('search.showinfo');
});



// Route::get('/post/showinfo/{{$post->id}}', function () {
//     return view('search.showinfo');
// });

// Route::get('/search', function () {
//     return view('search.search');
// });

Route::get('/search-post','user\postController@index');
Route::get('/search/resident/all','user\postController@search')->name('search');
Route::get('/search/showinfo/{id}','user\postController@showinfo');
// Route::get('/search/resident/all/flat','user\postController@search')->name('flat');



//Route::get('/search/resident/buy','user\postController@search')->name('search');

Route::get('category/resident/rent-pg','user\postController@rent')->name('rent');
Route::get('category/resident/buy','user\postController@buy')->name('buy');
Route::get('category/resident/buy-apartments','user\postController@buyApartment')->name('buyApartment');
Route::get('category/resident/buy-house','user\postController@buyHouse')->name('buyHouse');

// Route::get('category/resident/buy/filter','user\postController@buy')->name('filter');



//Route::get('/search/residential','user\postController@buysearch')->name('buysearch');

Route::post('/search/searchcat', 'user\postController@searchcat');


// Seller Routes
Route::get('home/addclient','Seller\AdminController@addClient')->name('addClient.show');
Route::resource('home/user','Seller\UserController');
Route::resource('home/seller_post','Seller\PostController');
Route::resource('home/seller','Seller\SellerController');

//Route::resource('home/seller_post','Seller\SellerPostController');


// Route::get('/home/post/create', function () {
//     return view('user.post.addPost');
// });
//
// Route::get('home/post/show','Seller\AdminController')->name('index');
// Route::get('home/post/create','Seller\AdminController')->name('create');
// Route::post('home/post/store','Seller\AdminController')->name('store');
//
//

//Route::get('home/post/create','seller\PostController@store')->name('post.store');

  // admin Route
  /* Route::get('admin/home',function(){
    return view('AdminPanel.index');
  }); */

//admin route

Route::get('admin/home','Admin\AdminController@index');
Route::get('admin-login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login','Admin\Auth\LoginController@login');

Route::get('admin/addclient','Admin\AdminController@addClient')->name('addClient.show');
Route::resource('admin/user','Admin\UserController');
Route::resource('admin/post','Admin\PostController');
Route::resource('admin/seller','Admin\SellerController');

//Role Routes
Route::resource('admin/role','Admin\RoleController');
//Pemissions Routes
Route::resource('admin/permission','Admin\PermissionController');




/* Route::resource('/admin/seller','Admin\SellerController'); */

/* Route::get('/home/addclient',function(){
  return view('admin.clientform');
});
Route::get('/home/user',function(){
  return view('admin.alluser');
}); */

/* Route::get('/home/post',function(){
  return view('admin.post.post');
}); */

/* Route::get('/home/allpost',function(){
  return view('admin.post.allpost');
}); */





Route::get('/home', 'HomeController@index')->name('home');
/* Route::get('/sale', 'HomeController@sale')->name('sale'); */

/* facebook login */

/* Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

/* googel */
/* Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


/*  contact */
Route::get('/contact','ContactController@contact')->name('contact');
/* Route::post('/contact','ContactController@sendContact'); */

Route::post('/contact',[
  'uses'=>'ContactController@sendContact','as'=>'contact.sendContact'
]);

Route::post('/enquiry',[
  'uses'=>'ContactController@sendContact','as'=>'enquiry.sendEnquiry'
]);

Route::get('/sendmail','EnquiryController@enquiry')->name('enquiry');

Route::post('/send-enquiry','ContactController@postEnquiry')->name('postenquiry');
Route::post('/send-feedback','ContactController@feedback')->name('feedback');

Route::get('/get-enquiry','ContactController@getenquiry')->name('getenquiry');

<?php

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
    return view('/include/indexpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::group(['middleware'=>['web','auth']],function(){
 route::get('/home',function(){
     if(Auth::user()->type==0){
         return view('home');
     }
     else{
         $user['users']=\App\User::all();
         return view('adminhome',$user);
     }
 });
});

Route::get('/userhome', function () {
    return view('userhome');
});


Route::get('/adminhome', function () {
    return view('adminhome');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('User/contactus');
});

Route::get('/ss', function () {
    return view('User/ss');
});

Route::get('/updateproduct', function () {
    return view('updateproduct');
});

Route::get('/singleproduct', function () {
    return view('User/singleproductview');
});

Route::get('/viewproductdetail', function () {
    return view('User/viewproductdetail');
});

Route::get('/userproductview', function () {
    return view('User/userproductview');
});


Route::get('/main', function () {
    return view('include/main');
});

Route::get('/wishlist', function () {
    return view('User/wishlist');
});

Route::get('/help', function () {
    return view('User/help');
});



Route::get('/userhome', function () {
    return view('User/userhome');
});
Route::get('/userproductorderdetail', function () {
    return view('User/userproductorderdetail');
});

Route::get('/adminuserproductverify', function () {
    return view('adminuserproductverify');
});

Route::get('/adduserproduct/{uid}', function () {
    return view('adminuserproductverify');
});

Route::get('/addnewproduct', function () {
    return view('User/addnewproduct');
});


Route::get('/testcontroller', function () {
    return 2;
});


Route::post('/adduser','UserController@adduser');

Route::post('/addproduct','ProductController@addproduct');

Route::get('/viewproduct','ProductController@selectproduct');

Route::get('/selectid/{id}','ProductController@selectid');

Route::post('/editproduct','ProductController@editproduct');

Route::get('/deleteproduct/{id}','ProductController@deleteproduct');

Route::get('/viewproductdetail','ProductController@viewproductdetail');

Route::get('/singleproductview/{id}','ProductController@productselect');

Route::post('/addtocart','CartController@addtocart');


Route::get('/addtocartproductview/{id}','CartController@addtocartproductview');

Route::post('/deletecart','CartController@deletecart');

Route::get('/wishlist/{uid}','CartController@selectcart');

//Route::get('/login','UserController@login')->name(login);

Route::post('/loginvalue','UserController@login');{}

Route::post('/addorder','OrderController@addorder');

Route::post('/addmessage','ContactController@addmessage');

Route::get('/orderdetail/{uid}','OrderController@selectorder');

Route::get('/orderverify','OrderController@adminorderverify');

Route::get('/userproductorderdetail/{uid}','OrderController@selectuserproductorder');

Route::get('/selectorder/{id}','OrderController@selectorderid');


Route::post('/deleteorder','OrderController@deleteorder');

Route::post('/deleteuserproductorder','OrderController@deleteuserproductorder');

Route::post('/searchproduct','ProductController@searchproduct');

Route::post('/userdashboard/fetch','ProductController@fetch')->name('autocomplete.fetch');

Route::post('/loginform','UserController@login');

Route::post('/addusersproduct','UserproductController@adduserproduct');

Route::post('/deleteuserproduct','UserproductController@deleteuserproduct');

Route::get('/productstatus/{uid}','UserproductController@productstatus');

Route::get('/adminuserproductverify','UserproductController@adminproductverify');

Route::get('/userproductorderverify','OrderController@userproductorderverify');

Route::post('/userproductorderupdate','OrderController@userproductorderupdate');

Route::post('/orderverifyupdate','OrderController@orderverifyupdate');

Route::post('/updateorder','OrderController@updateorder');


Route::post('/edituserproduct','UserproductController@edituserproduct');


Route::get('/myprofile/{id}','UserController@myprofile');

Route::get('/changeprofile/{id}','UserController@changeprofile');

Route::post('/updateprofile','UserController@updateprofile');

Route::get('/category/{searchitem}','ProductController@category');

Route::post('/pricesearch','ProductController@pricesearch');

Route::get('/userproductview','UserproductController@userproductview');

Route::get('/userproductid/{id}','UserproductController@userproductid');

Route::post('/userproductorder','OrderController@userproductorder');

Route::get('/contactdetail','ContactController@contactdetail');

Route::get('/deletecontact/{mid}','ContactController@deletecontact');

Route::get('/viewcontactdetail/{mid}','ContactController@viewcontactdetail');




//select testing

//Route::get('/testselect','ProductController@testselect');

//Route::get('/testselect','OrderController@testselect');

//Route::get('/testselect','ContactController@testselect');
//
//Route::get('/testselect','UserProductController@testselect');

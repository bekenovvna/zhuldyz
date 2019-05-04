<?php
use Illuminate\Http\Request;

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


Route::get('/about',[ 'uses'=>'AboutController@index', 'as'=>'about']);


Route::get('/session',[ 'uses'=>'SessionControllerr@accessSessionData', 'as'=>'basket']);
Route::match(['get','post'],'/session/set/{id}',['uses'=>'SessionControllerr@storeSessionData','as'=>'set']);
Route::get('/remove/{id}',[ 'uses'=>'SessionControllerr@deleteSessionData', 'as'=>'basketDelete'])->name('basketDelete');
Route::get('/session/remove',[ 'uses'=>'SessionControllerr@deleteSession', 'as'=>'Delete']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/',function()
    {
        if(view()->exists('admin.index'))
        {
            $data = ['title'=>'Administrator Panel'];
            return view('admin.index',$data);
        }
    });	

    Route::group(['prefix'=>'contents'],function(){
    //admin/pages
    Route::get('/',['uses'=>'ContentsController@execute','as'=>'contents']);

    //admin/pages/add
    Route::match(['get','post'],'/add',['uses'=>'ContentAddController@execute','as'=>'contentAdd']);

    //admin/edit/2
    Route::match(['get','post','delete'],'/edit{content}',['uses'=>'ContentEditController@execute','as'=>'contentEdit']);
});	

});



Route::get('/', function () {
    DB::table('order')->insert(['name_customer'=>'1',
    'email'=>'admin',
    'name_product'=>'1',
    'code_product'=>'2',
    'qty_product'=>'1',
    'price_product'=>'4',
    'total_price_product'=>'1']);


         return view('/about');
});

Route::get('/SignUp',[
    'uses' => 'RegistrController@signup',
    'as' => 'product.signUp'
]);

Route::get('/signIn', [
    'uses'=>'RegistrController@index',
    'as'=>'product.signin'
]);
Route::post('/signIn/checklogin', 'SessionController@store');

Route::post('/signUp/addToDB','RegistrController@getToDB');


Route::get('signIn/logout/{id}', 'ProductController@logout');

Route::get('/profile/{id}',[
    'uses'=>'RegistrController@getProfile',
    'as'=> 'product.profile'
]);

Route::post('/profile/{id}','ProfileUpdateController@edit');


Route::get('/logout', [
    'uses'=>'SessionController@destroy',
    'as'=> 'product.logout'
]);
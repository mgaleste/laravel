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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/','HomeController@home')->name('home');
//Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/contact','HomeController@contact')->name('contact');

Route::resource('posts','PostController');

$posts = array();

$posts[1] = array("title"=>"title1","content"=>"content1");
$posts[2] = array("title"=>"title2","content"=>"content2");
$posts[3] = array("title"=>"title3","content"=>"content3");



Route::prefix('/fun')->name('fun.')->group( function() use($posts){

    Route::get('/responses',function() use ($posts){
        return response($posts, 201)
            ->header('Content-Type','application/json')
            ->cookie('MY_COOKIE','Mixerwars',3600);
    })->name('reponses');

    Route::get('/redirect',function(){
        return redirect('/contact');
    })->name('redirect');   
    Route::get('/back',function(){
        return back();
    })->name('back');
    
    Route::get('/named-route',function(){
        return redirect()->route('home');
    })->name('named-route');
    
    Route::get('/away',function(){
        return redirect()->away('https://google.com');
    })->name('away');
    
    Route::get('/json',function() use ($posts){
        return response()->json($posts);
    })->name('json');
    
    Route::get('/download',function() use ($posts){
        return response()->download(public_path('/daniel.jpg'), 'face.jpg');
    })->name('download');

});


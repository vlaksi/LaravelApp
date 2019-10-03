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
/* PRIMER DINAMICKOG PROSLEDJIVANJA PODATAKA
Route::get('/users/{id}/{name}',function($id,$name){
    return 'Ovo je korisnik broj: '. $id.' a njegovo ime je: '. $name;
});
*/

/* RANIJE KORISCEN KOD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('pages.about'); //vraca iz view stranicu pages/about
});
*/

Route::get('/','PagesController@pocetna');              //prvi argument je url koji ce biti,a drugi kontroler@fja i ta odredjena
Route::get('/about','PagesController@about');           //fja npr vrati neki view i prikazuje neku stranicu
Route::get('/materijali','PagesController@materijali');

Route::resource('posts','PostsController');             //samo pravi sve routove za fje koje smo prethodno napravili u PostsController


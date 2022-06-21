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
    return view('welcome');
});*/

Route::get('/ders',function () {
    if($_POST){
        $username = $POST['username'];
        echo $username;
    }
    echo '<form action ="" method="POST">
    '.csrf_field().'
    <div>
       <input type="text" name="username">
    </div>
    <br>
    <button>Kayıt Ol</button>
    </form>';
});


//Bu alan scope kullanımı
/*Route::get('/',function(){
    $active = \App\Models\Yazar::where('isActive',1)->get();
    //$admin = \App\Models\Yazar::isAdmin()->get();

    //Bu boş geliyor, çnkü şuan byle bir verimiz yok.
    $combine = \App\Models\Yazar::isAdmin()->isActive()->get();
    dd($combine);

});*/


//Bu alan accessor kullanımı
Route::get('/',function(){
    $yazarlar=\App\Models\Yazar::all();
    dd($yazarlar);
});
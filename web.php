 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio','pagina1');
Route::view('/noticias','nivel2.pagina2');
Route::view('/retos','nivel2.retos');
Route::view('/quien','nivel2.whoim');
Route::view('/natura','nivel2.empresa');
Route::view('/finlandia','nivel2.pais');
Route::view('/comunidad','nivel2.comunidad');
Route::view('/desechos','nivel2.diccionario');
Route::view('/locales','nivel2.locales');
Route::view('/energia','nivel2.energia');
Route::view('/cambioclimatico','nivel2.cambio');
Route::view('/cuidadoagua','nivel2.agua');
Route::view('/contactanos','nivel2.contacto');
Route::view('/politica','nivel2.privacidad');
Route::view('/tallwindss','flowbite');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;

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

Route::get('/', HomeController::class);
    


Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');
    

Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');

   
Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');

Route::get('contact',[ContactController:: class,'contact'])->name('contact.contact');
  
Route::post('contact',[ContactController::class,'na'])->name('contact.na');





// Route::get('contact',[CursoController::class,'email'])->name('contact.email');   

// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
//   if($categoria){
//     return "bienvenido al curso de $curso,de la categoria $categoria";
//   }else{
//     return "bienvenido al curso : $curso";
//   }

// });



// Auth::routes();





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

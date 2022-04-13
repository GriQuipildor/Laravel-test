<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;
use App\Http\Controllers\studentController;

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
    return view('welcome');
});

Route::get('iniciar', function () {
    return view('test');
});

Route::get('/user/{id}', function ($id) {
    return view('usuario', compact('id'));
    return 'User '.$id;
});

Route::get('/posts/{post}/comments/{comment}', [personaController::class, 'index']);

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {

    // return view('posteo', compact('postId', 'commentId'));

    // DD ejecuta, muestra y muere el programa
    // DD($postId, $commentId);
    
    // return $postId . $commentId;
// });
            //continuar para mostrar usuario 
// Route::get('/user/{name}, function($name)' [personaController::class, 'index']);

Route::get('/student', [studentController::class, 'index']);
Route::get('/student/new', [studentController::class, 'new']);
Route::post('/student/new', [studentController::class, 'insertNewStudent']);
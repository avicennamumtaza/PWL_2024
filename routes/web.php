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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function() {
    return 'World';
});


Route::get('/about', function() {
    $nama = 'Avicenna Mumtaza';
    $nim = 2241720112;
    return "Nama : $nama<br>Nim : $nim";
});

Route::get('/', function() {
    return 'Selamat Datang';
});

Route::get('/user/{name}', function($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-' . $postId . " komentar ke-$commentId";
});

Route::get('/articles/{id}', function($articleId) {
    return "Halaman Artikel dengan ID $articleId";
});

// Optional Parameter

Route::get('/user/{name?}', function($name=null) {
    return "Nama saya $name";
});

Route::get('/user/{name?}', function($name='John') {
    return "Nama saya $name";
});

// Route::get('/user/profile', function() {
//     //
// })->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // // Generating URLs...
// $url = route('profile');

// // // Generating Redirects...
// return redirect()->route('profile');

// // Route Group
// Route::middleware(['first', 'second'])->group(function () { 
//     Route::get('/', function () { 
//         // Uses first & second middleware... 
//     }); 
    
//     Route::get('/user/profile', function () { 
//         // Uses first & second middleware... 
//     }); 
// }); 

// Route::domain('{account}.example.com')->group(function () { 
//     Route::get('user/{id}', function ($account, $id) { 
//         // 
//     }); 
// }); 
 
// // Route Prefixes
// Route::middleware('auth')->group(function () { 
//  Route::get('/user', [UserController::class, 'index']); 
//  Route::get('/post', [PostController::class, 'index']); 
//  Route::get('/event', [EventController::class, 'index']); 
// });
// // Redirect Routes
// Route::redirect('/here', '/there'); 

// // View Routes
// Route::view('/welcome', 'welcome'); 
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
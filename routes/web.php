<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

// - Route Parameters
/*Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});*/


/*Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke -: " . $commentId;
});/*


/*Route::get('/user/{name}', function ($name) {
    return 'Nama saya '. $name;
});*/

// - Basic Routing 
/* Route::get('/about', function () {
    return '2341720065 - Agna Putra Prawira';
});*/
 


/* Route::get('/', function () {
    return 'Welcome';
});*/

/* Route::get('/hello', function () {
    return 'Hello World';
});*/

/* Route::get('/world', function () {
    return 'World';
}); */

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

Route::prefix('sc/business')->group(function () {
    Route::get(`/proposal/2023`, function () {
        return Redirect::to('/business/proposal-makustik-2022.pdf');
    });
    Route::get('/proposal/coituz/2022', function () {
        return Redirect::to('/business/proposal-au-revoir-2022.pdf');
    });
});
Route::get('/hello-there', function () {
    return Redirect::to('https://linktr.ee/halo_makustik');
});

// Social media link
// Route::get('/linkedin', function () {
//     return Redirect::to('https://linkedin.com/company/boxity-central-indonesia');
// });
Route::get('/whatsapp', function () {
    return Redirect::to('http://wa.me/6285195211098');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/makustikmusic');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/makustikmusic');
});
Route::get('/youtube', function () {
    return Redirect::to('https://youtube.com/@makustikmusic');
});
// Route::get('/career', function () {
//     return Redirect::to('/job-vacancies');
// });
// Route::get('/facebook-community', function () {
//     return Redirect::to('https://www.facebook.com/groups/boxitycustomersuccess');
// });

Route::get('/', function () {
    return view('welcome');
});

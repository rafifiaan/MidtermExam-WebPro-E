<?php

use App\Models\Kos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Untuk rute ke mana
Route::get('/', function () {
    $arr_reviews = [
        [
            "name" => "Justin / Jess No Limit",
            "image" => "../img/justin.jpg",
            "job" => "Streamer",
            "body" => "Saya dapat dengan cepat mencari kosan yang sesuai dengan kriteria saya, seperti lokasi, harga, dan fasilitas!"
        ],
        [
            "name" => "Dzawin Nur",
            "image" => "../img/dzawin.jpg",
            "job" => "Comedian",
            "body" => "MyKos adalah penyelamat bagi mahasiswa seperti saya yang selalu kesulitan mencari kosan yang sesuai!"
        ]
    ];
    return view('home', [
        "title" => "Home",
        "reviews" => $arr_reviews
    ]);
}) -> name('home');

Route::get('/about-us', function () {
    return view('about-us', [
        "title" => "About Us",
    ]);
}) -> name('about-us');

Route::get('/catalog', [
    CatalogController::class,
    'index']
) -> name('catalog');

Route::get('/login', [
    LoginController::class,
    'index']
) -> name('login');

Route::post('/login', [
    LoginController::class,
    'store']
);

Route::get('/register', [
    RegisterController::class,
    'index']
) -> name('register');

Route::post('/register', [
    RegisterController::class,
    'store']
);

Route::get('/logout', [
    LogoutController::class,
    'store']
) -> name('logout');

Route::get('/dashboard', [
    DashboardController::class,
    'index']
) -> name('dashboard');

Route::get('/dashboard/add', [
    DashboardController::class,
    'add']
) -> name('add-kos');

Route::post('/dashboard/add', [
    DashboardController::class,
    'store']
);

Route::get('/dashboard/{id}/edit', [
    DashboardController::class,
    'edit']
) -> name('edit-kos');

Route::put('/dashboard/{id}', [
    DashboardController::class,
    'update']
);

Route::delete('/dashboard/{id}', [
    DashboardController::class,
    'destroy']
);

Route::get('/view/{slug}', [
    ViewController::class,
    'index']
) -> name('view');

// Route::get('/view/{slug}', function () {
//     return view('view', [
//         "title" => "Lihat Kos",
//     ]);
// }) -> name('view');

// Route::get('/register', function () {
//     return view('register', [
//         "title" => "Register"
//     ]);
// });


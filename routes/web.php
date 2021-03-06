<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('banner_events', 'BannerEventsController@banner');
Route::get('nome', 'BannerEventsController@getNome');
Route::get('multiplicar/{n1}/{n2}', 'BannerEventsController@multiplicar');

Route::resource('clientes', 'ClienteController');

Route::get('produtos', function () {
    return view('produtos.index');
})->name('produtos');

Route::get('departamentos', function () {
    return view('departamentos.index');
})->name('departamentos');

Route::get('/opcoes/{opcao?}', function ($opcao = null) {
    return view('opcoes.index', compact(['opcao']));
})->name('opcoes');

Route::get('/bootstrap', function () {
    return view('bootstrap.index');
});

//ESTUDO DAS ROTAS
// Route::get('/teste', function () {
//     return view('teste');
// });

// Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
//     echo "Olá, seja bem vindo,  $nome $sobrenome !";
// });

// Route::get('/seunome/{nome?}', function ($nome = null) {
//     if ($nome != null) {
//         echo "Olá, seja bem vindo,  $nome!";
//     } else {
//         echo "Você não digitou o nome.";
//     }
// });

// Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
//     for ($i = 0; $i < $n; $i++) {
//         echo "Olá, seja bem vindo,  $nome!<br>";
//     }
// })->where('nome', '[A-Za-z]+')
//   ->where('n', '[0-9]+');

// Route::prefix('/aplicacao')->group(function () {
//     Route::get('/', function () {
//         return view('app');
//     })->name('app');


//     Route::get('/user', function () {
//         return view('user');
//     })->name('app.user');


//     Route::get('/profile', function () {
//         return view('profile');
//     })->name('app.profile');
// });

// Route::get('/produtos', function () {
//     echo '<h1>Página de produtos</h1>';
// })->name('meusprodutos');

// Route::redirect('todosprodutos1', 'produtos', 301);

// Route::get('todosprodutos2', function () {
//     return redirect()->route('meusprodutos');
// });



// //////////////////////////////////////////////
// Route::delete('/requisicoes', function (Request $request) {
//     return 'Hello DELETE';
// });

// Route::put('/requisicoes', function (Request $request) {
//     return 'Hello PUT';
// });

// Route::post('/requisicoes', function (Request $request) {
//     return 'Hello POST';
// });

// Route::patch('/requisicoes', function (Request $request) {
//     return 'Hello Patch';
// });

// Route::options('/requisicoes', function (Request $request) {
//     return 'Hello OPTIONS';
// });

// Route::get('/requisicoes', function (Request $request) {
//     return 'Hello GET';
// });

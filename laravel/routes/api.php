<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function() {
  // Laravel にデフォであるやつ
  Route::get('/user', function (Request $request) {
    return $request->user();
  });

  // GET /api/articles で、記事5件をJsonで返す。
  Route::get('articles',  function() {
    $articles = Article::all()->take(5);
    return $articles;
  });
});

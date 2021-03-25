<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('signup', '\App\Http\Controllers\UserController@store');
Route::post('login', '\App\Http\Controllers\UserController@login');
Route::post('user/changePassword', '\App\Http\Controllers\UserController@changePassword');
Route::post('user/edit', '\App\Http\Controllers\UserController@userEdit');
Route::post('forgot', '\App\Http\Controllers\UserController@forgot');
Route::get('products/get', '\App\Http\Controllers\ProductsController@getAllProducts');
Route::get('products/get/{id}', function ($id) {
    $products = Product::all();
    $categories = Category::all()->where('id', 'like', $id);

    if (!json_decode($categories)) {
        return response()->json('Category not found', 404);
    }

    $arrayProducts = json_decode($products);
    $arrayCategories = json_decode($categories);

    for ($x = 0; $x < count($arrayProducts); $x++) {
        for ($y = 0; $y < count($arrayCategories); $y++) {
            if ($arrayProducts[$x]->category_id == $arrayCategories[$y]->id) {
                $arrayProducts[$x]->category_id = $arrayCategories[$y]->type;
                $productsSearched = $arrayProducts[$x];
            }
        }
    }

    return response()->json($productsSearched, 200);
});
Route::get('categories/get', '\App\Http\Controllers\CategoriesController@getAllCategories');
Route::post('search', '\App\Http\Controllers\ProductsController@searchProduct');
Route::post('setOrder', '\App\Http\Controllers\ProductsController@setOrder');
Route::get('history/get', '\App\Http\Controllers\ProductsController@seeAllOrders');

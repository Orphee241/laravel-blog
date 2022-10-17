<?php

namespace App\Http\Controllers;
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

/* Page d'accueil */
Route::get('/', [PagesController::class, "index"]);

/* Page articles */
Route::get('/articles', [PagesController::class, "articles"]);

/* Page d'un article */
Route::get('/article/{id}', [PagesController::class, "article"]);

/* Page d'ajout d'un article */
Route::get('/add-article', [PagesController::class, "add_article"]);

/* Page création d'un article */
Route::post('/create-article', [PagesController::class, "create_article"]);

/* Page d'édition d'un article */
Route::get('/edit-article/{id}', [PagesController::class, "edit_article"]);

/* Page d'édition d'article */
Route::post('/editt-article', [PagesController::class, "editt_article"]);

/* Page suppression d'article */
Route::get("/delete-article/{id}", [PagesController::class, "delete_article"]);

/* Page categorie */
Route::get('/categories', [PagesController::class, "categories"]);

/* Page d'une categorie */
Route::get('/category/{nom_category}', [PagesController::class, "category"]);

/* Page inscription */
Route::get('/signup', [PagesController::class, "signup"]);

/* Page connexion */
Route::get('/login', [PagesController::class, "login"]);

/* Page à propos */
Route::get('/about', [PagesController::class, "about"]);

/* Page contact */
Route::get('/contact', [PagesController::class, "contact"]);

/* ADMIN */

Route::get("/dashboard", [AdminController::class, "dashbord"]);

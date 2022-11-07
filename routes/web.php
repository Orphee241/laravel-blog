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
Route::get('/blog', [PagesController::class, "articles"]);

/* Page articles */
Route::get('/tutoriels', [PagesController::class, "tutos"]);

/* Page Formations */
Route::get('/formations', [PagesController::class, "formations"])->name("formations");

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

/* Page inscription */
Route::post('/user-signup', [PagesController::class, "user_signup"]);

/* Page connexion */
Route::get('/login', [PagesController::class, "login"]);
Route::post('/user-login', [PagesController::class, "user_login"]);

/* Page déconnexion */
Route::get('/logout', [PagesController::class, "logout"]);

/* Page commentaires */
Route::get('/add-comment/{id}', [PagesController::class, "add_comment"]);

/* Page commentaires 2 */
Route::get('/add-comment2/{article_id}/{comment_id}', [PagesController::class, "add_comment2"]);

/* Page commentaires */
Route::post('/create-comment/{id}', [PagesController::class, "create_comment"]);

/* Page commentaires 2 */
Route::post('/create-comment2/{article_id}/{comment_id}', [PagesController::class, "create_comment2"]);

/* Delete comment */
Route::get('/delete-comment/{article_id}/{comment_id}', [PagesController::class, "delete_comment"]);

/* Page à propos */
Route::get('/about', [PagesController::class, "about"]);

/* Page contact */
Route::get('/contact', [PagesController::class, "contact"]);

/* ADMIN */

Route::get("/admin/dashboard", [adminController::class, "dashboard"]);
Route::get("/admin/users", [adminController::class, "users"]);
Route::get("/admin/articles", [adminController::class, "articles"]);
Route::get("/admin/article/{id}", [adminController::class, "article"]);
Route::get("/admin/categories", [adminController::class, "categories"]);
Route::get("/admin/add-category", [adminController::class, "add_category"]);
Route::post("/admin/create-category", [adminController::class, "create_category"]);
Route::get("/admin/stats", [adminController::class, "stats"]);
Route::get("/admin/category/{nom_categorie}", [adminController::class, "category"]);
Route::get("/admin/add-article", [adminController::class, "add_article"]);
Route::post("/admin/create-article", [adminController::class, "create_article"]);
Route::get("/admin/edit-article/{id}", [adminController::class, "edit_article"]);
Route::post("/admin/editt-article/{id}", [adminController::class, "editt_article"]);
Route::get("/admin/delete-article/{id}", [adminController::class, "delete_article"]);
Route::get("/admin/confirm-delete-article/{id}", [adminController::class, "confirm_delete_article"]);

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

route::get('/hello_world', function(){
    return ("<h1>Hello World</h1>");
});

route :: get('/contact_us', function() {
    return "<h1>Contact us</h1>";
}) -> name ('contact_us');


route::fallback(function (){
    return view ('users.error');
 });

 route :: get('/simple', function(){
        return view ('simple');
 });

 route::get('/laravel', function(){
    return view ('laravel');
});

Route::get(
'/view_user(id)',
[UserController::class, 'ViewUser']


);

Route::get('/home',[UserController::class,'index']) -> name ('home');

Route::get('/home_users', [UserController::class,'alluser']) -> name ('showusers');


Route::get('/home_addusers',[UserController::class,'adduser']) -> name ('adduser');

Route::get('/home_alltasks',[UserController::class,'allTasks']) -> name ('allTasks');

Route::get(
    '/view_task/id={id}',
    [UserController::class, 'viewTask']
)->name('show_task');

Route::get(
    '/delete_task{id}',
    [UserController::class, 'deleteTask']
)->name('delete_task');

Route::get(
    '/view_user/id={id}',
    [UserController::class, 'viewUser']
)->name('show_user');

Route::get(
    '/delete_user{id}',
    [UserController::class, 'deleteUser']
)->name('delete_user');

Route::get('/home_add_user',   [UserController::class, 'addUser'])->name('add_user');
Route::post('/create_user',   [UserController::class, 'createUser'])->name('create_user');
Route::get('/home_add_task',   [UserController::class, 'addTasks'])->name('add_task');
Route::post('/create_tasks',   [UserController::class, 'createTasks'])->name('create_tasks');









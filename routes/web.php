<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function (Request $req) {
    $contents = Post::paginate(4);

    if ($typeFlash = $req->flash) {
        // echo $typeFlash;
        Session::flash($typeFlash, $req->message);
    }

    return view('home',compact('contents'));
});

// 5.a | get post with user name and user email
Route::get('/posts', [PostController::class,"index"]);

// 5.b | get user with his comments
Route::get('/users', function (Request $req)
{
    $post = User::with(['comments'=>function ($c)
    {
        $c->select('comment','user_id');
    }])->get();
    return response()->json($post);
});

// 5.c | Guest Comments whose users are not registered in the system
Route::get('/comments', [CommentController::class,"index"]);



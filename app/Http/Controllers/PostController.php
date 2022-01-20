<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
   public function index()
   { 
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in : ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By : ' . $author->name;
        }

        return view('posts', [
            "title" => "All Post" . $title,
            "active" => "posts",
            "posts" => post::latest()->Filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
   }

   public function show(Post $post){
    return view('post', [
        "title" => "single post",
        "active" => "posts",
        "post" => $post 
    ]);
   }
}

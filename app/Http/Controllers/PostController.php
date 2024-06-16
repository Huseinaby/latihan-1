<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    
    public function index(){
        $title = '';

        if(request('caregory')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }

        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' by '. $user->username;
        }

        return view('posts', [  
            "title" => "All Posts". $title,
            "active" => 'posts',
            "posts"=> Post::latest()->Filter(request(['search', 'category', 'user']))->paginate(4)->withQueryString()
            
        ]);
    }
    
    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}

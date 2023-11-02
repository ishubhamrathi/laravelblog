<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $all_categories = Category::where('status' , '0')->get();
        $latest_posts = Post::where('status','0')->orderBy('created_at', 'DESC')->get()->take(15);
        return view('frontend.index', compact('all_categories','latest_posts'));
    }
    public function viewCategoryPost(String $category_slug){
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if($category){
            $post = Post::where('category_id', $category->id)->where('status','0')->paginate(5);
            return view('frontend.post.index', compact('post','category'));
        } else {
            return redirect('/')->with('message', 'Not valid request');
        }
    }
    public function viewPost(String $category_slug, String $post_slug){
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if($category){
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status','0')->first();
            $latest_post = Post::where('category_id', $category->id)->where('status','0')->orderBy('created_at', 'DESC')->get()->take(15);
            return view('frontend.post.view', compact('post', 'latest_post'));
        } else {
            return redirect('/')->with('message', 'Not valid request');
        }
    }
}

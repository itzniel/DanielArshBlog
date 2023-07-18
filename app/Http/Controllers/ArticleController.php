<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    //display all the articles
    public function index() {
        $articles = DB::table('articles')->get();
        return view('articles.index', compact("articles"));
    }
    // //creating a new article
    public function create(){
        $categories = Category::all();
        if (\Auth::User()->type != 'admin'){
            return "you don't have the permission for this";
        }
        return view ('articles.create', compact('categories'));
    }
}

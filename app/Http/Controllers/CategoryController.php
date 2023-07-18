<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Article;

class CategoryController extends Controller
{
    //For Authentication
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit', 'delete']]);
    }
    public function index() //displays all category
    {
        $categories = Category::all();
        return view('categories.index', compact("categories" ));

    }
    //display a single category
    public function show($category)
    {
        $category = Category::find($category);
        return view('categories.show', compact("category"));
    }
    //creating a new category
    public function create(){
        if (\Auth::User()->type != 'admin'){
            return "you don't have the permission for this";
        }
        return view ('categories.create');
    }
}

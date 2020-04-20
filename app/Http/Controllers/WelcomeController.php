<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function allData(){
        $project = Project::where('status', 'inprogress')->latest()->limit(10);
        $news = Post::latest()->limit(10);
        $product = Product::latest()->limit(10);
    }
}

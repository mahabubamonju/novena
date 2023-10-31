<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('status',1)->get();  
        $products = Product::orderBy('id','desc')->get();
        
        return view('frontend.home.index',compact('categories' , 'products'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;


class ProductsController extends Controller
{
    public function products_show()
    {
    	
    	$data = Product::all();

    	return view('products', compact('data'));

    }
        public function oneproduct(Category $product)
    {
    	    	$data = DB::table('products')->get();
    	$x = DB::table('categories')->get();
    	

    	return view('oneproduct',compact('product','x','data'));

    }


      public function categories_show()
    {
    	
    	$data = DB::table('categories')->get();

    	return view('categories',compact('data'));

    }
}

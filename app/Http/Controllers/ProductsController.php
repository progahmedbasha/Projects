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
        $x = DB::table('categories')->get();

    	return view('products', compact('data', 'x'));

    }
    public function products_store(Request $request)
    {
            $product = new Product;
        $product->product_name =$request->product_name;
        $product->product_price=$request->product_price;
        $product->qty=$request->qty;
        $product->category_id=$request->category_id;


        $product->save();
        return back();
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

     public function categories_store(Request $request)
    {
            $category = new Category;
        $category->title =$request->title;

        $category->save();
        return back();
    }
}

<?php

namespace App\Http\Controllers;
use\App\Product;
use\App\Category;

use Illuminate\Http\Request;

class EiserController extends Controller
{
   public function index(){
   	$categories = Category::where('status','1')->get();
   /*	$featuredProducts = Product::skip('1')->take('3')-get();
   	$newProducts =Product::orderBy('id','DESC')->take('4')->get();*/
   	return view('font-end.home.home', [

   	    'categories' =>$categories
   		/*'featuredProducts'=>$featuredProducts,
   		'newProducts' =>$newProducts]*/
   		
   ]);
   }
   public function category(){
   	
   	return view('font-end.category.category');
   }
}

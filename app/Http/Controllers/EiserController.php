<?php

namespace App\Http\Controllers;
use\App\Product;
use\App\Category;

use Illuminate\Http\Request;

class EiserController extends Controller
    {
   public function index(){
      
      $featuredProducts = Product::skip('1')->take('3')->get();
      $newProducts =Product::orderBy('id','DESC')->take('5')->get();
      return view('font-end.home.home', [

          
         'featuredProducts'=> $featuredProducts,
         'newProducts' => $newProducts
         
   ]);
   }
   public function category($id){
      $catProducts = Product::where('cat_id',$id)->get();
      return view('font-end.category.category',['catProducts'=> $catProducts]);
   }
   public function productDetails($id){
      $productDetails = product::find($id);
      return view('font-end.product.product-details',['productDetails' => $productDetails]);
      
   }
}

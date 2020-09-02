<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(){
    	return view('admin.category.add-category');
    }
    public function newCategory(Request $request){
    
        $this->validate($request,[
            'cat_name'=>'required |regex:/^[a-z ,.\'-]+$/', 
            'cat_desc'=>'required',
            'status'=>'required',
            
        ]);

    	$category = new Category;
    	$category->cat_name = $request->cat_name;
    	$category->cat_desc = $request->cat_desc;
    	$category->status = $request->status;
    	$category->save();
    	return redirect('/category/add')->with('message','Add Category Successfuly');
    }
    public function manageCategory(){
    	$categories = Category::all();
    	return view('admin.category.manage-category',['categories'=>$categories]);
    }
    public function publishedCategory($id){
    	$category = Category::find($id);
        $category->status = 0;
        $category->save();
        return redirect('/category/manage');
    }
    public function unpublishedCategory($id){
    	$category = Category::find($id);
    	$category->status = 1;
    	$category->save();
    	return redirect('/category/manage');
    }
    public function updateCategory(Request $request){
        
        $category = Category::find($request->id);
        $category->cat_name = $request->cat_name;
        $category->cat_desc = $request->cat_desc;
        $category->status  = $request->status;
        $category->save();
        return redirect('category/manage')->with('message','Category Update Successfuly');

    }
    public function deleteCategory($id){
        $category = Category::find ($id);

        $category-> delete();
        return redirect('category/manage')->with('message','Category Delete Successfuly');
    }
}

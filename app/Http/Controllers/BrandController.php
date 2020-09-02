<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;
use Image;

class BrandController extends Controller
{
    public function addBrand(){
    	return view('admin.brand.add-brand');
    }
    public function newBrand(request $request){
    	$this->validate($request,[
    		'brand_name' => 'required',
    		'brand_desc' => 'required',
    		'brand_image' =>'required |image',
    		'status'=>'required'
    	]);
        
         $brandImage = $request->file('brand_image');
        $imageName = $brandImage->getClientOriginalName();
        $directory = 'public/admin/brand-images/';
        $imageUrl = $directory.$imageName;
        // $brandImage->move($directory, $imageName);
        Image::make($brandImage)->resize(400,400)->save($imageUrl);

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_desc = $request->brand_desc;
        $brand->brand_image = $imageUrl;
        $brand->status = $request->status;
        $brand->save();

        return redirect('/brand/add')->with('message','Brand Added Successfully');
    }

    public function viewBrand(){
        $brands = Brand::all();
        return view('admin.brand.view-brand',['brands'=>$brands]);
    }
    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand ->status ='0';
        $brand ->save();
        return redirect('/brand/view');
    }
    public function unpublishedBrand($id){
        $brand = Brand::find($id);
        $brand ->status ='1';
        $brand ->save();
        return redirect('/brand/view');
    }

    public function updateBrand(Request $request){
        $brandImage = $request->file('brand_image');
        $brand = Brand::find($request->id);
        if($brandImage){
            unlink($brand->brand_image);

            $imageName = $brandImage->getClientOriginalName();
            $directory = 'public/admin/brand-images/';
            $imageUrl = $directory.$imageName;
            $brandImage->move($directory, $imageName);

            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->brand_image = $imageUrl;
            $brand->status = $request->status;
            $brand->save();
        } else {

            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->status = $request->status;
            $brand->save();
        }

        return redirect('/brand/view')->with('message','Brand Updated Successfully');
    }

    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/brand/view')->with('message','Brand Delete Successfully');
    }
}



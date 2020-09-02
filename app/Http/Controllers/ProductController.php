<?php
namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use App\product;
use Illuminate\Http\Request;
    class ProductController extends Controller
        {
        public function addProduct(){
        $categories = Category::where('status','1')->get();
        $brands = Brand::where('status','1')->get();
        return view('admin.product.add-product',[
        'categories' => $categories,
        'brands'=> $brands
        ]);
        }

public function newProduct(request $request){
    $mainImage = $request->file('main_image');
    $ext = '.'.$request->main_image->getClientOriginalExtension();
    $imageName = str_replace($ext, date('d-m-Y-h').$ext,$request->main_image->getClientOriginalName());
    $directory = 'public/admin/product-images/main/';
    $imageUrl = $directory.$imageName;
    $mainImage->move($directory, $imageName);

    foreach($request->file('imagefile') as $image){
        $imageName2 = $image->getClientOriginalName();
        $directory = 'public/admin/product-images/gallery/';
        $imageUrl2 = $directory.$imageName2;
        $image->move($directory, $imageName2);
        $data[] = $imageUrl2;
        }  

    $product = new Product();
    $product->product_name = $request->product_name;
    $product->cat_id  = $request->cat_id;
    $product->brand_id  = $request->brand_id;
    $product->Product_price  = $request->Product_price;
    $product->short_desc  = $request->short_desc;
    $product->long_desc  = $request->long_desc;
    $product->product_size  = $request->product_size;
    $product->product_qty  = $request->product_qty;
    $product->main_image = $imageUrl;
    $product->imagefile = json_encode($data);
    $product->save();
    return back()->with('message','Add Product Successfully');
    }
    }
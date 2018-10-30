<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function addProduct(){
        $categoies= Category::where('category_status',1)->get();
        $manufacturer= Manufacturer::where('manufacturer_status',1)->get();
        return view('admin.product.addProduct',['categories'=>$categoies,'manufacturers'=>$manufacturer]);
    }
    public function saveProduct( Request $request){

        $this->validate($request,[
            'product_name'=>'required',
            'category_id'=>'required',
            'manufacturer_id'=>'required',
            'product_price'=>'required',
            'product_image'=>'required',
            'publication_status'=>'required',
        ]);


       $product_image=$request->file('product_image');

        $productImageName=$product_image->getClientOriginalName();
        $upload_path='product/';
        $product_image->move($upload_path,$productImageName);
        $product_image_url=$upload_path.$productImageName;

        $product=new Product();
        $product->product_name=$request->product_name;
        $product->category_id=$request->category_id;
        $product->manufacturer_id=$request->manufacturer_id;
        $product->product_price=$request->product_price;
        $product->product_quantity=$request->product_quantity;
        $product->product_short_description=$request->product_short_description;
        $product->product_long_description=$request->product_long_description;
        $product->product_image=$product_image_url;
        $product->publication_status=$request->publication_status;
        $product->save();
        return redirect(route('manageProduct'))->with('message','Product Inserted Successfully');



    }

    public function manageProduct(){
        $products=DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('manufacturers','products.manufacturer_id','manufacturers.id')
                    ->select('products.*','categories.category_name','manufacturers.manufacturer_name')
                    ->get();

        return view('admin.product.manageProduct',compact('products'));
    }

}

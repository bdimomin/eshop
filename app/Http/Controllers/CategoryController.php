<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('admin.category.createCategory');
    }

    public function saveCategory(Request $request){


//        return $request->all();

        $this->validate($request,[
            'category_name'=>'required',
            'category_description'=>'required',
            'category_status'=>'required',
        ]);
        $category = new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->category_status=$request->category_status;
        $category->save();
        return redirect()->back()->with('message','Category has been created Successfully');

//        Category::create($request->all());
//        return "Category has been inserted successfully";


//        DB::table('categories')->insert([
//            'category_name'=>$request->category_name,
//            'category_description'=>$request->category_description,
//            'category_status'=>$request->category_status,
//        ]);

    }
    public function manageCategory(){
        $categories=Category::all();
        return view('admin.category.manageCategory',['categories'=>$categories]);
    }
    public function editCategory($id){
        $categoryByID=Category::where('id',$id)->first();
       return view('admin.category.editCategory',compact('categoryByID'));

    }

    public function updateCategory( Request $request){
       //dd($request->all());

        $updateCategory = Category::find($request->category_id);
        $updateCategory->category_name=$request->category_name;
        $updateCategory->category_description=$request->category_description;
        $updateCategory->category_status=$request->category_status;
        $updateCategory->save();
        return redirect('/category/manage')->with('message','Category has been updated Successfully');
    }

    public function deleteCategory($id){
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        return redirect('/category/manage')->with('message','Category Deleted successfully');
    }
}

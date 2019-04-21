<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;
use App\subcategory;

class SubCategoryController extends Controller
{
    public function addSubCategory(){
        $categories = Category::where('category_publication_status', 1)->get();
        return view('backEnd.subcategory.addSubCategory')->withCategories($categories);
    }
    public function manageSubCategory(){
        $subcategory = DB::table('subcategories')->get();
        return view('backEnd.subcategory.manageSubCategory')->with('subcategory',$subcategory);
    }
    public function storeSubCategory(Request $request){
        DB::table('subcategories')->insert([
            'subcategory_name' => $request->sub_category_name,
            'subcategory_status' => $request->sub_category_publication_status,
            'category_id' => $request->categoryId,
        ]);
            return back();
    }
    public function update(Request $request,$id){
        DB::table('subcategories')->where('id',$id)->update([
            'subcategory_name' => $request->sub_category_name,
            'subcategory_status' => $request->sub_category_publication_status,
            'category_id' => $request->categoryId,
        ]);
        return back();
    }
    public function edit($id){
        $categories = Category::where('category_publication_status', 1)->get();
        $subcategory = DB::table('subcategories')->where('id','=',$id)->first();
        return view('backEnd.subcategory.editsubcategory')->with('subcategory',$subcategory)->with('categories',$categories);
    }
    public function delete($id){
        $subcategoryById = subcategory::find($id);
        $subcategoryById -> delete();
        return back();
    }

}

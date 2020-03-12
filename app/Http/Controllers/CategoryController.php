<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(){
    	return view('admin.category.add');
    }

    public function newCategory(Request $request){

    	// $category = new Category();
    	// $category->category_name = $request->category_name;
    	// $category->category_description = $request->category_description;
    	// $category->status = $request->status;

    	// $category->save();

    	Category::create($request->all());


    	return 'Success';

    }

    public function manageCategory(){

    	$categories = Category::all();

    	return view('admin.category.manage',['categories' => $categories]);
    }
}

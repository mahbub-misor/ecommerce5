<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){

    	//return "This is Hello World Controller function";
    	return view('front.home.home');

    }

    public function categoryProduct(){
    	return view('front.category.category-product');
    }

    public function productDetails(){
    	return view('front.product.product-details');
    }

}

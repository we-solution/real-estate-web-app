<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slide;
use App\User;

class HomeAdminController extends BaseAdminController{

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

         $categories = Category::all();
         $products = Product::all();
         $slides  = Slide::all();
         $users =  User::all();

        return view("admin.index",['categories' => count($categories), 'products' => count($products),"slides"=> count($slides), "users"=>count($users)]);
    }
}
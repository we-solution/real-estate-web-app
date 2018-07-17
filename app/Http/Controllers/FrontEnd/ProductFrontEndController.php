<?php


namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\BaseController;
use App\Product;

class ProductFrontEndController extends BaseController
{

    public function __construct(){
        parent::__construct();
    }

    public function index($id){
        $data['product'] = Product::find($id);
        return view("pages.product",$data);
    }
}
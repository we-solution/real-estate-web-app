<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\BaseController;
use App\Product;
use View;
use Illuminate\Http\Request;

class HomeFrontEndController extends BaseController
{
    private $products, $limit = 8;

    public function __construct(Product $products){
        parent::__construct();

        $this->products = $products;
    }

    public function index(){
        $products = $this->products->orderBy('id','desc')->paginate($this->limit);
        return view("pages.index",['products' => $products]);
    }

    public function search(Request $request){
        $key = $request->get('txtSearch');
        if (!empty($key)) {
            $products = $this->products
                ->where('id', '=', $key )
                ->orwhere('title', 'like', '%'.$key.'%' )
                ->orwhere('title_en','like', '%'.$key.'%' )
                ->orwhere('price','like', '%'.$key.'%' )
                ->orderBy('id', 'desc')
                ->paginate($this->limit);
            return view("pages.index",['products' => $products]);
        }else {
            return redirect('');
        }
    }
}
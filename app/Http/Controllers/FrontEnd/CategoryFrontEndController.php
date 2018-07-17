<?php


namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\BaseController;
use App\Product;
use View;
use Illuminate\Http\Request;

class CategoryFrontEndController extends BaseController
{
    private $products, $limit = 8;
    public function __construct(Product $products){
        parent::__construct();
        $this->products = $products;
    }

    public function index($id,Request $request){
        if ($request->has('limit')) {
            $this->limit= $request->get('limit');
        }
        $products = $this->products
            ->where('cat_id', '=', $id)
            ->orderBy('id', 'desc')
            ->paginate($this->limit);
        return view("pages.category",['products' => $products]);
    }
}
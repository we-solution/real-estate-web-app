<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use File;
use Mapper;

class ProductController extends BaseAdminController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        $limit  = 10;
        if ($request->has('limit')) {
            $limit= $request->get('limit');
        }
        $products = Product::paginate($limit);
        return view('admin.product.index', ['products' => $products] );
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        request()->validate([
            'title' => 'required',
            'title_en' => 'required',
            'images' => 'required',
            'desc' => 'required',
            'desc_en' => 'required',
            'cat_id' => 'required'
        ]);

        $product = new Product();
        $product->fill($request->all());
        
        if($request->hasFile('images')){
            $images = $request->file('images');
            $product->images = $this->uploadImage($images);
        }
        $product->user()->associate($user);
        $product->save();
        return redirect('admin/product')->with('success','insert successfully');
    }

    public function show($id){
        $data['product'] = Product::findOrFail($id);
        return view('admin.product.show',$data);
    }

    public function edit($id){
        $data['product'] = Product::findOrFail($id);
        return view('admin.product.edit',$data);
    }

    public function create(){
       $categories['categories'] =  Category::all();
        Mapper::map(11.5690202,104.8905828, ['draggable' => true, 'eventClick' => 'console.log("left click");']);
        return view('admin.product.create',$categories);
    }

    public function update(Request $request,$id)
    {
        $user = Auth::user();

        request()->validate([
            'title' => 'required',
            'title_en' => 'required',
            'images' => 'required',
            'desc' => 'required',
            'desc_en' => 'required'
        ]);


        $product = new Product();
        $product->fill($request->all());

        if($request->hasFile('images')){
            $images = $request->file('images');
            $product->images = $this->uploadImage($images);
        }
        $product->user()->associate($user);
        $product->save();
        return redirect('admin/product')->with('success','updated successfully');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('admin/product')->with('message','delete success');
    }

    public function uploadImage($images){
        $imagesResult = array();
        if($images){
            foreach($images as $image){
                $filename =  $this->randomString() . '.' . $image->getClientOriginalExtension();
                //$filename = $image->getClientOriginalName();
                Image::make($image)->resize(300, 300)->save( public_path('/images/product/' . $filename ) );
                $imagesResult[] = $filename;
            }
        }
        return $imagesResult;
    }

    function randomString() {
        $length = 6;
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    public function getPhones($phones){
        $phonesResult = array();
        if($phones){
            foreach ($phones as $phone){
                if($phone){
                    $phonesResult[] = $phone;
                }
            }
        }
        return $phonesResult;
    }
}

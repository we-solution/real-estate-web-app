<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use File;

class CategoryAdminController extends BaseAdminController
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $limit  = 2;
        if ($request->has('limit')) {
            $limit= $request->get('limit');
        }
        $data['categories'] = Category::paginate($limit);
        return view('admin.category.index', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $user = Auth::user();

        request()->validate([
            'name' => 'required',
            'name_en' => 'required',
            'image' => 'required',
        ]);


        $category = new Category();
        $category->fill($request->all());

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/images/category/' . $filename ) );
            $category->image = $filename;
        }

        if($request->get("parent_id") != null){
            $categoryParentId = $request->get("parent_id");
            $categoryParent = Category::findOrFail($categoryParentId);
            $category->parent()->associate($categoryParent);
        }
        $category->user()->associate($user);
        $category->save();

        return redirect('admin/category')->with('success','insert successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($id){
        $data['category'] = Category::findOrFail($id);
        return view('admin.category.show',$data);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id){
        $data['category'] = Category::findOrFail($id);
        return view('admin.category.edit',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories['categories'] =  Category::all();
        return view('admin.category.create',$categories);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            'name' => 'required',
            'name_en' => 'required',
            'icon' => 'required'
        ]);
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect('admin/category')->with('success','updated successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('admin/category')->with('message','delete success');
    }



    public function search(Request $request){

    }
}

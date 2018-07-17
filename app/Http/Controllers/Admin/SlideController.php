<?php

namespace App\Http\Controllers\Admin;

use App\Slide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class SlideController extends BaseAdminController
{

    /**
     * SlideController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $limit  = 20;
        if ($request->has('limit')) {
            $limit= $request->get('limit');
        }
        $slides = Slide::paginate($limit);
        return view('admin.slide.index', ['slides' => $slides] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        request()->validate([
            'title' => 'required',
            'title_en' => 'required',
            'image' => 'required',
            'desc' => 'required',
            'desc_en' => 'required',
        ]);

        $slide = new Slide();
        $slide->fill($request->all());

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/images/slide/' . $filename ) );
            $slide->image = $filename;
        }
        $slide->user()->associate($user);
        $slide->save();
        $request->session()->flash('message','insert completed');

        return redirect('admin/slide')->with('success','insert successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['slide'] = Slide::findOrFail($id);
        return view('admin.slide.show',$data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['slide'] = Slide::findOrFail($id);
        return view('admin.slide.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        Slide::findOrFail($slide)->delete();
        return redirect('admin/slide')->with('message','delete success');
    }
}

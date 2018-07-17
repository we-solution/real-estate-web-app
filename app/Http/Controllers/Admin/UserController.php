<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

class UserController extends BaseAdminController
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $limit  = 20;
        if ($request->has('limit')) {
            $limit= $request->get('limit');
        }
        $users = User::paginate($limit);
        return view('admin.user.index', ['users' => $users] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);
        User::create($request->all());
        $request->session()->flash('message','insert completed');
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('admin.user.show',$data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('admin.user.edit',$data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);
        User::update($request->all());

        return redirect('admin/user')->with('success','updated successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('admin/user')->with('message','delete success');
    }
}

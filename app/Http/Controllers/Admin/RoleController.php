<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends BaseAdminController
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
        $roles = Role::paginate($limit);
        return view('admin.role.index', ['roles' => $roles] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
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
        Role::create($request->all());
        $request->session()->flash('message','insert completed');
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['role'] = Role::findOrFail($id);
        return view('admin.role.show',$data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['role'] = Role::findOrFail($id);
        return view('admin.role.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        request()->validate([
            'name' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);
        Role::update($request->all());

        return redirect('admin/role')->with('success','updated successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect('admin/role')->with('message','delete success');
    }
}

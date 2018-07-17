<?php

namespace App\Http\Controllers\Api;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ApiController extends Controller
{
    private $model = null;

    public function __construct()
    {
        if (!isset($this->modelName) || !$this->modelName) {
            throw new Exception("\$modelName is required in child controller");
        }

        $this->model = App::make($this->modelName);
    }

    public function index(Request $request)
    {
        $limit = $request->has('limit') ? $request->get('limit') : 10;

        $data = $this->model->paginate($limit);
        return response()->json(
            [
                "data" => $data,
                "status" => true,
                "message" => "data successful"
            ]);
    }

    public function show($id)
    {
        $data =  model::findOrFail($id);
        return response()->json(
            [
                "data" => $data,
                "status" => true,
                "message" => "data successful"
            ]);
    }

    public function store(Request $request)
    {
        $data = model::create($request->all());
        return response()->json(
            [
                "data" => $data,
                "status" => true,
                "message" => "save successful"
            ]);

    }

    public function update(Request $request, $id)
    {
        $data = model::findOrFail($id);
        $data->update($request->all());
        return response()->json(
            [
                "data" => $data,
                "status" => true,
                "message" => "update successful"
            ]);
    }

    public function destroy($id)
    {
        $data = model::findOrFail($id)->delete();
        return response()->json(
            [
                "data" => $data,
                "status" => true,
                "message" => "delete successful"
            ]);
    }
}

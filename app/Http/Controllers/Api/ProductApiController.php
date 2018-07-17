<?php

namespace App\Http\Controllers\Api;


class ProductApiController extends ApiController
{

    public $modelName = "App\\Product";

    public function __construct() {
        parent::__construct();
    }

}
<?php

namespace App\Http\Controllers\Api;

class CategoryApiController extends ApiController {

    public $modelName = "App\\Category";

    public function __construct() {
        parent::__construct();
    }

}
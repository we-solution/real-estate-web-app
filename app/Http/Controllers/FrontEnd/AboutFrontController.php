<?php

namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\BaseController;

class AboutFrontController extends BaseController
{

    public function __construct(){
        parent::__construct();

    }

    public function index(){

        return view('pages.about');
    }

}
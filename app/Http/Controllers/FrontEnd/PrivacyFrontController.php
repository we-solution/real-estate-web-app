<?php


namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\BaseController;

class PrivacyFrontController extends BaseController
{
    public function __construct(){
        parent::__construct();

    }

    public function index(){

        return view('pages.privacy');
    }
}
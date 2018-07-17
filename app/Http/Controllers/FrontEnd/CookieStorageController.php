<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Cookie;

class CookieStorageController extends BaseController
{

    public function language(Request $request){
        Cookie::queue('lang', @$request->lang, 60);
        return redirect()->back();
    }
}

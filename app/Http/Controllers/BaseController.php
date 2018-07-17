<?php


namespace App\Http\Controllers;

use App\Category;
use App\Slide;
use Illuminate\Support\Facades\Cookie;
use View;

class BaseController extends Controller
{

    public function __construct() {
        if(Cookie::get('lang') === ''){
            Cookie::queue('lang', 'en', 60);
        }
        $categories = Category::whereNull('parent_id',null)->get();
        view()->share(['categories' => $categories]);
        view()->share(['slides' => Slide::all()]);

    }
}
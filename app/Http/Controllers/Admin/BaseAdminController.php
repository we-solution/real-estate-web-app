<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BaseAdminController extends Controller
{
    /**
     * BaseDashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


}
<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($parent, $child = null) {
        echo request()->get('kh_stehsal');
        echo $parent.$child;
    }
}

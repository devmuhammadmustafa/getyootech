<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected CategoryService $categoryService
    ) {
    }

    public function index() {
        $parents = $this->categoryService->parents();
//        dd($parents[0]->name,$parents[0]->slug);
        return view('front.home');
    }
}

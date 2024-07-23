<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getParents(){
        return Category::where("parent_id", 0)->get();
    }
}

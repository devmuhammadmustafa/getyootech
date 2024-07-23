<?php

namespace App\Services;

use App\Repositories\CategoryRepositoryInterface;

class CategoryService
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository
    ) {
    }

    public function parents()
    {
        return $this->categoryRepository->allParents();
    }
}

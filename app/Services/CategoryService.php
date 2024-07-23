<?php

namespace App\Services;

use App\Repositories\CategoryRepositoryInterface;

class CategoryService
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository
    ) {

    }

    public function getParents() {
        return $this->categoryRepository->getParents();
    }
}

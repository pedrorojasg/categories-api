<?php
namespace categoriesAPI\V1\Rest\Categories;

use StatusLib\Mapper;

class CategoriesResourceFactory
{
    public function __invoke($services)
    {
        return new CategoriesResource($services->get(Mapper::class));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\ModelExample;
use App\Http\Resources\ModelExampleResource;
use App\Http\Requests\ModelExampleStoreRequest;
use App\Http\Requests\ModelExampleUpdateRequest;
use Harryes\CrudPackage\Http\Controllers\CrudBaseController;

class ModelExampleController extends CrudBaseController
{
    /**
     * Constructor to bind the model and resource class to the BaseController.
     */
    public function __construct()
    {
        parent::__construct(
            ModelExample::class,
            ModelExampleResource::class,
            ModelExampleStoreRequest::class,
            ModelExampleUpdateRequest::class
        );
    }
}
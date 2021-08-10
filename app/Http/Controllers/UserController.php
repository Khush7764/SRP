<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\UserService;

class UserController extends Controller
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function users()
    {
        return UserResource::collection($this->service->getUsers());
    }

    public function userById($id)
    {
        return (new UserResource($this->service->getSpecificUser($id)));
    }
}

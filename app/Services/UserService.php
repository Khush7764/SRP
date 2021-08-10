<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getUsers()
    {
        return $this->repository->getAll();
    }

    public function getSpecificUser($id)
    {
        return $this->repository->getById($id);
    }
}

<?php

namespace App\Models;

class UserModel extends AbstractBaseModel {
    private $userModel;

    public function __construct()
    {
        parent::__construct('users');
        $this->userModel = new UserModel();
    }

    public function createUser($data)
    {
        $this->userModel->create($data);
    }

    public function readUser($id)
    {
        $user = $this->userModel->read($id);
        print_r($user);
    }

    public function updateUser($id, array $data)
    {
        $this->userModel->update($id, $data);
    }

    public function deleteUser($id)
    {
        $this->userModel->delete($id);
    }
}

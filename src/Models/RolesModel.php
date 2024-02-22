<?php

namespace App\Models;

use App\Models\BaseModel;

class RolesModel extends BaseModel
{

    public $tableName = 'roles';
    public function createAccounts($data)
    {
        $data = $this->table($this->tableName)->insert($data);
        var_dump($data); die();
        return $data;
    }

    public function getAllRoles()
    {
        $data = $this
            ->table($this->tableName)
            ->get();

        return $data;
    }
}

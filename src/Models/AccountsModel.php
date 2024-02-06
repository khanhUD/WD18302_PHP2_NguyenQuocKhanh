<?php

namespace App\Models;

use App\Models\BaseModel;

class AccountsModel extends BaseModel
{

    public $tableName = 'accounts';
    public function checkAccounts($email)
    {
        return $this->select()->where('email', '=', $email)->first();
    }
    public function createAccounts($data)
    {
        $data = $this
            ->table('accounts')
            ->insert($data);

        return $data;
    }
    public function getAllByIdProjeact($id)
    {
        $data = $this
            ->select('accounts.*, projectparticipation.position')
            ->table($this->tableName)
            ->join('projectparticipation ', 'accounts.account_id = projectparticipation.account_id')
            ->where('project_id', '=', $id)
            ->get();
        // var_dump($data);
        // die();

        return $data;
    }
    public function getAllAccounts()
    {
        $data = $this
            ->table($this->tableName)
            ->where('status', '=', 1)
            ->get();

        return $data;
    }
}

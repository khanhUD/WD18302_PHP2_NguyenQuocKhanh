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
    public function createAccount($data)
    {
        $data = $this
            ->table('accounts')
            ->insert($data);

        return $data;
    }
    public function getAllByIdProjeact($id)
    {
        $data = $this
            ->select('accounts.*, projectparticipation.position ,projectparticipation.participation_id as participation_id ')
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
            ->select('accounts.* ,roles.role_name')
            ->table($this->tableName)
            ->join('roles', 'accounts.role_id = roles.role_id')
            ->where('status', '!=', 0)
            ->get();
        return $data;
    }
    public function createAccounts($data)
    {
        $attrs = array_keys($data);
        var_dump($attrs);
        die();
        $columnsStr = implode(", ", $attrs);
        $valuesStr = ":" . implode(", :", $attrs);
        $sql = "INSERT INTO $this->tableName ($columnsStr) VALUES ($valuesStr)";

        $stmt = $this->_connection->PDO()->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }
    public function getAccountById($id)
    {
        $data = $this
            ->table($this->tableName)

            ->where('account_id', '=', $id)
            ->first();
        return $data;
    }
    public function getAllBrowser()
    {
        $data = $this
            ->select('accounts.*,roles.role_name AS role_name')
            ->table($this->tableName)
            ->join('roles', 'accounts.role_id = roles.role_id')
            ->where('status', '=', 0)
            ->get();
        return $data;
    }
    public function updateAccount($data, $id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('account_id', '=', $id)
            ->update($data);
        return $data;
    }
    public function getAccountDetail($id)
    {
        $data = $this
            ->select('accounts.*,roles.role_name AS role_name')
            ->table($this->tableName)
            ->join('roles', 'accounts.role_id = roles.role_id')
            ->where('accounts.account_id', '=', $id)
            ->first();
        return $data;
    }
    public function deleteAccount($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('account_id', '=', $id)
            ->delete();
        return $data;
    }
}

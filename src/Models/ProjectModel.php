<?php

namespace App\Models;

use App\Models\BaseModel;

class ProjectModel extends BaseModel
{

    public $tableName = 'projects';
    public function getAllProjects()
    {
        $data = $this
            ->table($this->tableName)
            ->where('status', '=', 1)
            ->get();
        return $data;
    }
    public function getProjectDetail($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('project_id', '=', $id)
            ->first();

        return $data;
    }
    public function getAllBrowser()
    {
        $data = $this
            ->table($this->tableName)
            ->where('status', '=', 0)
            ->orderBy('create_at', 'DESC')
            ->get();
        return $data;
    }
    public function getProjectById($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('project_id', '=', $id)
            ->first();
        return $data;
    }
    public function createProject($data)
    {
        $data = $this
            ->table($this->tableName)
            ->insert($data);
        return $data;
    }
    public function updateProject($data, $condition)
    {
        $attrs = array_keys($data);
        $setStr = implode(", ", array_map(fn ($attr) => "$attr = :$attr", $attrs));
        $sql = "UPDATE $this->tableName SET $setStr WHERE BINARY project_id = $condition";
        $stmt = $this->_connection->PDO()->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }
    public function disable($data, $id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('project_id', '=', $id)
            ->update($data, $id);
        return $data;
    }
}

<?php

namespace App\Models;

use App\Models\BaseModel;

class TasksModel extends BaseModel
{

    public $tableName = 'tasks';
    public function getTasksByProjectId($id)
    {
        $data = $this
            ->select('task_name, task_id,task_content,start_date, end_date')
            ->table($this->tableName)
            ->where('project_id', '=', $id)
            ->get();
        return $data;
    }
    public function getAllTasks()
    {
        $data = $this
            ->select('tasks.*,
            accounts.full_name AS account_full_name,
            projects.project_name ')
            ->table($this->tableName)
            ->join('accounts', 'tasks.account_id = accounts.account_id')
            ->join('projects', 'tasks.project_id = projects.project_id')
            ->where('tasks.status', '=', 1)
            ->where('projects.status', '!=', -1) // Thêm điều kiện này
            ->get();

        return $data;
    }
    public function getTaskDetail($id)
    {
        $data = $this
            ->select('tasks.*,projects.project_id AS projects_projects_id, projects.project_name AS projects_projects_name, accounts.full_name AS account_full_name')
            ->table($this->tableName)
            ->join('accounts', 'tasks.account_id = accounts.account_id')
            ->join('projects', 'tasks.project_id = projects.project_id')
            ->where('tasks.task_id', '=', $id)
            ->first();
        return $data;
    }
    public function createTasks($data)
    {
        $data = $this
            ->table($this->tableName)
            ->insert($data);
        return $data;
    }
    public function getTaskById($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('task_id', '=', $id)
            ->first();
        return $data;
    }
    public function updateTask($data, $condition)
    {
        $attrs = array_keys($data);
        $setStr = implode(", ", array_map(fn ($attr) => "$attr = :$attr", $attrs));
        $sql = "UPDATE $this->tableName SET $setStr WHERE BINARY task_id = $condition";
        $stmt = $this->_connection->PDO()->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }
    public function deleteTask($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('task_id', '=', $id)
            ->delete();
        return $data;
    }
}
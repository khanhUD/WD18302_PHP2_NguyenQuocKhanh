<?php

namespace App\Models;

use App\Models\BaseModel;

class TasksModel extends BaseModel
{

    public $tableName = 'tasks';
    public function getTasksByProjectId($id)
    {
        $data = $this
            ->select('task_name, task_id')
            ->table($this->tableName)
            ->where('project_id', '=', $id)
            ->get();
        return $data;
    }
    public function getAllTasks()
    {
        $data = $this
            ->select(' tasks.*,
        accounts.full_name AS account_full_name,
        projects.project_name')
            ->table($this->tableName)
            ->join('accounts', 'tasks.account_id = accounts.account_id')
            ->join('projects', 'tasks.project_id = projects.project_id')
            ->where('tasks.status', '=', 1)
            ->get();
        return $data;
    }
    public function createTasks($data)
    {
        $data = $this
            ->table($this->tableName)
            ->insert($data);
        return $data;
    }
}

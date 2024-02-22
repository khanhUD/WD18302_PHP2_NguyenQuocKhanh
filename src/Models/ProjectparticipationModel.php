<?php
namespace App\Models;
use App\Models\BaseModel;

class ProjectparticipationModel extends BaseModel
{

    public $tableName = 'projectparticipation';
    public function countMembersOfProject($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('project_id', '=', $id)
            ->get();
        $count = count($data);
        return $count;
    }
    public function getAllProjectparticipation()
    {
        $data = $this
            ->select('projectparticipation.*,
            accounts.full_name AS account_full_name,
            projects.project_name AS project_name
            ')
            ->table($this->tableName)
            ->join('accounts', 'projectparticipation.account_id = accounts.account_id')
            ->join('projects', 'projectparticipation.project_id = projects.project_id')
            ->where('projects.status', '!=', -1) // Thêm điều kiện này
            ->get();
        return $data;
    }
    public function createProjectparticipation($data)
    {
        $attrs = array_keys($data);
        $columnsStr = implode(", ", $attrs);
        $valuesStr = ":" . implode(", :", $attrs);
        $sql = "INSERT INTO $this->tableName ($columnsStr) VALUES ($valuesStr)";
        $stmt = $this->_connection->PDO()->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }
    public function getProjectparticipationById($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('participation_id', '=', $id)
            ->first();
        return $data;
    }
    public function updateProjectparticipation($data, $condition)
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
    public function deleteProjectparticipation($id)
    {
        $data = $this
            ->table($this->tableName)
            ->where('participation_id', '=', $id)
            ->delete();
        return $data;
    }
}

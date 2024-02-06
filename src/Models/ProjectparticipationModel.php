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
}

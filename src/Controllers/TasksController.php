<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\Request;
use App\Models\ProjectModel;
use App\Models\TasksModel;
use App\Models\AccountsModel;
use App\Models\ProjectparticipationModel;

class TasksController extends BaseController
{
    public $data = [], $projectModel, $accountsModel, $tasksModel;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->tasksModel = new TasksModel();
        $this->accountsModel = new AccountsModel();
        // $this->projectparticipationModel = new ProjectparticipationModel();
    }
    public function index()
    {
        $this->data['Projects'] =  $this->projectModel->getAllProjects();
        $this->data['Accounts'] =  $this->accountsModel->getAllAccounts();
        $this->data['Tasks'] =  $this->tasksModel->getAllTasks();
        return $this->view('Admin.Tasks.List', $this->data);
    }

    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        
    }

    // Xử lý  thêm nhiệm v POST
    public function store()
    {
   
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show($id)
    {
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
    }

    // /du-an/sua-xu-ly xửa dự án POST
    public function update()
    {
    }


    //  Xử lý xóa dự án Delete
    public function destroy()
    {
    }
}

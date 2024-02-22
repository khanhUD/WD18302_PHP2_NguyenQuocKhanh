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
    { {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'task_name' => $_POST['task_name'],
                    'start_date' => $_POST['start_date'],
                    'project_id' => $_POST['project_id'],
                    'end_date' => $_POST['end_date'],
                    'task_content' => $_POST['task_content'],
                    'account_id' => $_POST['account_id'],
                    'description' => $_POST['description'],
                ];

                $result = $this->tasksModel->createTasks($data);
                if ($result) {
                    // Thêm thành công 
                    $this->redirect('/nhiem-vu');
                }
            }
        }
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show($id)
    {
        if (isset($_GET['id'])) {
            // Lấy giá trị của 'id'
            $id = $_GET['id'];
        }
        $this->data['task'] =  $this->tasksModel->getTaskDetail($id);
        return $this->view('Admin.Tasks.Detail', $this->data);
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        if (isset($_GET['id'])) {
            // Lấy giá trị của 'id'
            $id = $_GET['id'];
        }
        $this->data['Projects'] =  $this->projectModel->getAllProjects();
        $this->data['Accounts'] =  $this->accountsModel->getAllAccounts();
        $this->data['task'] =  $this->tasksModel->getTaskById($id);
        return $this->view('Admin.Tasks.Edit', $this->data);
    }

    // /du-an/sua-xu-ly xửa dự án POST
    public function update()
    {
        $request = new Request;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy giá trị của 'id'
            $id = $_POST['task_id'];
            $data = $request->getBody();
            $result = $this->tasksModel->updateTask($data, $id);
            if ($result) {
                $this->redirect('/nhiem-vu/chi-tiet/'.$id);
            }
        }
    }


    //  Xử lý xóa dự án Delete
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['task_id'];
            $result = $this->tasksModel->deleteTask($id);
            if ($result) {
                $this->redirect('/nhiem-vu');
            }
        }
    }
}

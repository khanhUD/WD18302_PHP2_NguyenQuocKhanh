<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\Request;
use App\Models\ProjectModel;
use App\Models\TasksModel;
use App\Models\AccountsModel;
use App\Models\ProjectparticipationModel;

class ProjectController extends BaseController
{
    public $data = [], $projectModel, $tasksModel, $accountsModel, $projectparticipationModel;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->tasksModel = new TasksModel();
        $this->accountsModel = new AccountsModel();
        $this->projectparticipationModel = new ProjectparticipationModel();
    }
    public function index()
    {
        $this->data['listProject'] =  $this->projectModel->getAllProjects();
        return $this->view('Admin.Project.List', $this->data);
    }
    public function Browser()
    {
        $this->data['listProject'] =  $this->projectModel->getAllBrowser();
        return $this->view('Admin.Project.WaitingList', $this->data);
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
    }

    // Xử lý thêm dự án POST
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'project_name' => $_POST['project_name'],
                'description' => $_POST['description'],
                'start_date' => $_POST['start_date'],
                'end_date' => $_POST['end_date'],
                'project_cost' => $_POST['project_cost'],
            ];
            $result = $this->projectModel->createProject($data);
            if ($result) {
                // Thêm thành công 
                $this->redirect('/du-an');
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
        $this->data['tasks'] =  $this->tasksModel->getTasksByProjectId($id);
        $this->data['project'] =  $this->projectModel->getProjectDetail($id);
        $this->data['accounts'] =  $this->accountsModel->getAllByIdProjeact($id);
        $this->data['count'] =  $this->projectparticipationModel->countMembersOfProject($id);
        return $this->view('Admin.Project.Detail', $this->data);
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        if (isset($_GET['id'])) {
            // Lấy giá trị của 'id'
            $id = $_GET['id'];
        }
        $this->data['project'] =  $this->projectModel->getProjectById($id);
        return $this->view('Admin.Project.Edit', $this->data);
    }

    // /du-an/sua-xu-ly xửa dự án POST
    public function update()
    {
        $request = new Request;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['project_id'];
            $data = $request->getBody();
            $result = $this->projectModel->updateProject($data, $id);
            if ($result) {
                $this->redirect('/du-an/chi-tiet/'.$id);
            }
        }
    }
    public function updateStatus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['project_id'];
            $data = [
                'status' => $_POST['status'],
            ];
            $result = $this->projectModel->updateProject($data, $id);
            if ($result) {
                $this->redirect('/du-an');
            }
        }
    }

    //  Xử lý xóa dự án Delete
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['project_id'];
            $data = [
                'status' => '-1',
            ];
            $result = $this->projectModel->disable($data, $id);
            if ($result) {
                $this->redirect('/du-an');
            }
        }
    }
}

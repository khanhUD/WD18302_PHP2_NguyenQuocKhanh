<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\Request;
use App\Models\ProjectModel;
use App\Models\TasksModel;
use App\Models\AccountsModel;
use App\Models\ProjectparticipationModel;

class ProjectparticipationController extends BaseController
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
        $this->data['Projects'] =  $this->projectModel->getAllProjects();
        $this->data['Accounts'] =  $this->accountsModel->getAllAccounts();
        $this->data['Projectparticipation'] =  $this->projectparticipationModel->getAllProjectparticipation();
        return $this->view('Admin.Projectparticipations.List', $this->data);
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
        $request = new Request;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $request->getBody();
            $result = $this->projectparticipationModel->createProjectparticipation($data);
            if ($result) {
                $this->redirect('/phan-cong');
            }
        }
    }
    // Lấy ra thông tin của 1 dự án GET
    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        if (isset($_GET['id'])) {
            // Lấy giá trị của 'id'
            $id = $_GET['id'];
        }
        $this->data['Projects'] =  $this->projectModel->getAllProjects();
        $this->data['Accounts'] =  $this->accountsModel->getAllAccounts();
        $this->data['Projectparticipation'] =  $this->projectparticipationModel->getProjectparticipationById($id);
        return $this->view('Admin.Projectparticipations.Edit', $this->data);
    }

    // /du-an/sua-xu-ly xửa dự án POST
    public function update()
    {
        $request = new Request;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['project_id'];
            $data = $request->getBody();
            $result = $this->projectparticipationModel->updateProjectparticipation($data, $id);
            if ($result) {
                $this->redirect('/phan-cong');
            }
        }
    }
    //  Xử lý xóa dự án Delete
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy giá trị của 'id'
            $id = $_POST['participation_id'];
            $result = $this->projectparticipationModel->deleteProjectparticipation($id);
            if ($result) {
                $this->redirect('/phan-cong');
            }
        }
    }
}

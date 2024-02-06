<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountsModel;
use App\Models\RolesModel;

class RegisterController extends BaseController
{

    public $data = [], $accountsModel, $rolesModel;
    public function __construct()
    {
        $this->accountsModel = new AccountsModel();
        $this->rolesModel = new RolesModel();
    }
    public function index()
    {

        $this->data['roles'] =  $this->rolesModel->getAllRoles();
        // echo 'đây là đăng ký';
        return $this->view('Login.register', $this->data);
    }
    public function handleRegiter()
    {
        // Kiểm tra trước rồi mới tạo đối tượng accountsModel
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST["email"];
            $account = $this->accountsModel->checkAccounts($email);

            if ($account) {
                $error_message = "Email đã tồn tại.";
                return $this->view('Login.register', ['error_message' => $error_message]);
            } else {
                $data = [
                    'full_name' => $_POST['full_name'],
                    'email' => $_POST['email'],
                    'role_id' =>  $_POST['role_id'],
                    'password' => ($_POST['password']) 
                ];
                $result = $this->accountsModel->createAccounts($data);
                if ($result) {
                    // Đăng nhập thành công 
                    $this->redirect('/dang-nhap');
                }
            }
        }
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\Request;
use App\Models\AccountsModel;
use App\Models\RolesModel;

class AccountsController extends BaseController
{
    public $data = [], $accountsModel, $rolesModel;
    public function __construct()
    {
        $this->rolesModel = new RolesModel();
        $this->accountsModel = new AccountsModel();
    }
    public function index()
    {
        $this->data['roles'] =  $this->rolesModel->getAllRoles();
        $this->data['Accounts'] =  $this->accountsModel->getAllAccounts();
        return $this->view('Admin.Accounts.List', $this->data);
    }
    public function Browser()
    {
        $this->data['Account'] =  $this->accountsModel->getAllBrowser();
        return $this->view('Admin.Accounts.WaitingList', $this->data);
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        // echo 'đây là tạo tài khoản';
        return $this->view('Admin.Accounts.List');
    }

    // Xử lý thêm dự án POST
    public function store()
    {
        $request = new Request;
        if ($request->isPost()) {
            $email = $_POST["email"];
            $account = $this->accountsModel->checkAccounts($email);

            if ($account) {
                // Nếu địa chỉ email đã tồn tại, hiển thị thông báo lỗi ra màn hình
                $error_message = "Địa chỉ email đã tồn tại. Vui lòng chọn địa chỉ email khác.";
                $this->redirect('/tai-khoan', $error_message);
            } else {
                $postValues = $request->getFields();
                $image = $postValues['image'];
                $targetDir = "public/uploads/";
                $targetFile = $targetDir . basename($image["name"]);
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    echo "Tệp " . basename($image["name"]) . " đã được tải lên thành công.";
                } else {
                }
                $data = [
                    'image' => $postValues['image']['name'],
                    'full_name' => $postValues['full_name'],
                    'email' => $postValues['email'],
                    'password' => ($postValues['password']),
                    'role_id' => $postValues['role_id'],
                    'phone_number' =>  $postValues['phone_number'],
                    'status' =>  $postValues['status'],

                ];
                $result = $this->accountsModel->createAccount($data);

                if ($result) {
                    $this->redirect('/tai-khoan');
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
        $this->data['Account'] =  $this->accountsModel->getAccountDetail($id);
        return $this->view('Admin.Accounts.Detail', $this->data);
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        if (isset($_GET['id'])) {
            // Lấy giá trị của 'id'
            $id = $_GET['id'];
        }
        $this->data['roles'] =  $this->rolesModel->getAllRoles();
        $this->data['Accounts'] =  $this->accountsModel->getAccountById($id);
        return $this->view('Admin.Accounts.Edit', $this->data);
    }

    // Xử lý xửa dự án POST
    public function update()
    {
        $request = new Request;
        if ($request->isPost()) {
            $postValues = $request->getFields(); //layid
            $id = $postValues['account_id'];
            $data = [
                'full_name' => "'" . $postValues['full_name'] . "'",
                'email' => $postValues['email'],
                'role_id' => $postValues['role_id'],
                'phone_number' =>  $postValues['phone_number'],
                'status' =>  $postValues['status'],
            ];
            $image = $postValues['image'];
            $targetDir = "public/uploads/";
            $targetFile = $targetDir . basename($image["name"]);

            if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                echo "Tệp " . basename($image["name"]) . " đã được tải lên thành công.";
                $data['image'] = $postValues['image']['name'];
            } else {
                $data['image'] = $postValues['imageOld'];
            }

            $result = $this->accountsModel->updateAccount($data, $id);

            if ($result) {
                $this->redirect('/tai-khoan/chi-tiet/' . $id);
            }
        }
    }
    public function updateStatus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['account_id'];
            $data = [
                'status' => $_POST['status'],
            ];
            $result = $this->accountsModel->updateAccount($data, $id);
            if ($result) {
                $this->redirect('/tai-khoan/cho-duyet');
            }
        }
    }

    //  Xử lý xóa dự án Delete
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy giá trị của 'id'
            $id = $_POST['account_id'];
            $result = $this->accountsModel->deleteAccount($id);
            if ($result) {
                $this->redirect('/tai-khoan');
            }
        }
    }
}

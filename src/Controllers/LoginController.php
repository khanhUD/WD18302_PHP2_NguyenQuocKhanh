<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\core\Response;
use App\Models\AccountsModel;

class LoginController extends BaseController
{
    public $accountsModel;
    public function __construct()
    {
        $this->accountsModel = new AccountsModel();
    }
    public function index()
    {
        // echo 'đây là đăng nhập';

        return $this->view('Login.login',);
    }
    public function handleLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Tiếp tục kiểm tra tài khoản nếu email hợp lệ
            $account = $this->accountsModel->checkAccounts($email);
            if (!$account) {
                $error_message = "Email không tồn tại.";
                return $this->view('Login.login', ['error_message' => $error_message]);
            } else {
                // Kiểm tra mật khẩu
                if ($password === $account['password']) {
                    // Kiểm tra trạng thái tài khoản
                    if ($account['status'] != 1) {
                        $error_message = "Tài khoản chưa được phê duyệt hoặc đang bị khóa.";
                        return $this->view('Login.login', ['error_message' => $error_message]);
                    } else {
                        // Đăng nhập thành công
                        $_SESSION["users"] = $account;
                        $this->redirect('/');
                    }
                } else {
                    $error_message = "Mật khẩu không đúng.";
                    return $this->view('Login.login', ['error_message' => $error_message]);
                }
            }
        }
    }

    public function logOut()
    {
        session_destroy();
        $this->redirect('/dang-nhap');
        exit();
    }
    public function forgotPassword()
    {
        return $this->view('Login.forgot_password',);
    }
}

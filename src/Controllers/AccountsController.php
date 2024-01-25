<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class AccountsController extends BaseController
{
    public function index()
    {
        echo 'đây là danh sách tài khoản';
        // return $this->view('Admin.Accounts.List');
    }
    public function Browser()
    {
        echo 'đây là danh sách chờ duyệt tài khoản';
        // return $this->view('Admin.Accounts.WaitingList');
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        echo 'đây là tạo tài khoản';
        // return $this->view('Admin.Accounts.Create');
    }

    // Xử lý thêm dự án POST
    public function store()
    {
        //
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show($id)
    {
        echo 'đây là tài khoản chi tiết';
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        echo 'sửa tài khoản';
        // return $this->view('Admin.Accounts.Edit');

    }

    // Xử lý xửa dự án POST
    public function update($id)
    {
        //
    }

    //  Xử lý xóa dự án Delete
    public function destroy($id)
    {
        //
    }
}

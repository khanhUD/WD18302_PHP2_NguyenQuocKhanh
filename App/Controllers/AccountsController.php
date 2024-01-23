<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class AccountsController extends BaseController
{
    public function index()
    {
        return $this->view('Admin.Accounts.List');
    }
    public function Browser()
    {
        return $this->view('Admin.Accounts.WaitingList');
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        return $this->view('Admin.Accounts.Create');
    }

    // Xử lý thêm dự án POST
    public function store()
    {
        //
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show()
    {
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        return $this->view('Admin.Accounts.Edit');

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

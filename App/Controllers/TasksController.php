<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class TasksController extends BaseController
{

    public function index()
    {
        return $this->view('Admin.Tasks.List');
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        return $this->view('Admin.Tasks.Create');

    }

    // Xử lý thêm dự án POST
    public function store()
    {
        //
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show()
    {
        return $this->view('Admin.Tasks.Detail');

    }

    // Hiển thị form sửa dự án GET
    public function edit()
    {
        return $this->view('Admin.Tasks.Edit');

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

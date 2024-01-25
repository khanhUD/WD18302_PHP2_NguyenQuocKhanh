<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProjectController extends BaseController
{
   public function index()
    {
        // echo 'đây là danh sách dựu án';
        return $this->view('Admin.Project.List');
    }
    public function Browser()
    {
        // echo 'đây là danh sách chờ duyệt ';
        return $this->view('Admin.Project.WaitingList');
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        // echo 'đây là tạo ';
        return $this->view('Admin.Project.List');
    }

    // Xử lý thêm dự án POST
    public function store()
    {
        //
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show($id)
    {
        return $this->view('Admin.Project.Detail');
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        return $this->view('Admin.Project.Edit');
    }

    // Xử lý xửa dự án POST
    public function update($id)
    {
      
    }

    //  Xử lý xóa dự án Delete
    public function destroy($id)
    {
        //
    }
}

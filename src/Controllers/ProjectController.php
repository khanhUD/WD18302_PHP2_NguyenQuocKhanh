<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProjectController extends BaseController
{
   public function index()
    {
        echo 'đây là danh sách dựu án';
        // return $this->view('Admin.Project.List');
    }
    public function Browser()
    {
        echo 'đây là danh sách chờ duyệt ';
        // return $this->view('Admin.Project.WaitingList');
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        echo 'đây là tạo ';
        // return $this->view('Admin.Project.Create');
    }

    // Xử lý thêm dự án POST
    public function store()
    {
        //
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show($id)
    {
      echo 'đây là hiển thị chi tiết của ..có id ='.$id;
    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
      echo 'đây là sửa của ..có id ='.$id;
        // return $this->view('Admin.Project.Edit');

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

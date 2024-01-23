<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class TeamsController extends BaseController
{

    public function index()
    {
        $team = [
            'id' => '1',
            'name' => 'khanh',
        ];

        return $this->view('Admin.Teams.List', ['']);
       
    }
    /*
    Hiển thị fomr thêm dự án GET
    */
    public function create()
    {
        return $this->view('Admin.Teams.Create');

    }

    // Xử lý thêm dự án POST
    public function store()
    {
        //
    }

    // Lấy ra thông tin của 1 dự án GET
    public function show()
    {
        return $this->view('Admin.Teams.TeamDetail');

    }

    // Hiển thị form sửa dự án GET
    public function edit($id)
    {
        return $this->view('Admin.Teams.Edit');

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

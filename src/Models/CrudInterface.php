<?php

namespace App\Models;

interface CrudInterface{
    
    /**
     * Phương thức getAll() dùng để lấy tất cả records
    */
    public function getAll();

    /**
     * Phương thức getOne() dùng để lấy một record
     * @param int $id
     * @return array $record
    */
    /**
     * Phương thức create dùng để tạo mới dữ liệu
     * @return mixed
    */
    public function create($table,array $data);
    
    public function updateData($table, $data, $condition = '');

    public function deleteData($table, $condition = ''): bool;
}
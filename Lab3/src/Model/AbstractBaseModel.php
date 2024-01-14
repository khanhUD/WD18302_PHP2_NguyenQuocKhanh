<?php

namespace App\Models;

use App\Core\Database;

interface BaseModel {
    public function create(array $data); // thêm mới
    public function read($id); //xem chi tiết
    public function update($id, array $data); // sửa
    public function delete($id); // xóa
}

abstract class AbstractBaseModel implements BaseModel {
    protected $tableName;
    protected $db;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->db = new Database();
    }

    public function create(array $data) {
        $fields = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $query = "INSERT INTO $this->tableName ($fields) VALUES ($values)";

        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute(array_values($data));
            echo "Record created successfully";
        } catch (\PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function read($id) {
        $query = "SELECT * FROM $this->tableName WHERE id = ?";

        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function update($id, array $data) {
        $fields = array_map(function ($field) {
            return "$field=?";
        }, array_keys($data));

        $query = "UPDATE $this->tableName SET " . implode(', ', $fields) . " WHERE id = ?";

        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute(array_merge(array_values($data), [$id]));
            echo "Record updated successfully";
        } catch (\PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function delete($id) {
        $query = "DELETE FROM $this->tableName WHERE id = $id";

        try {
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute([$id]);
            echo "Record deleted successfully";
        } catch (\PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}


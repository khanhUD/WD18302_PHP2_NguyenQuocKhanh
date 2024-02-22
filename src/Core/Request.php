<?php

namespace App\Core;

class Request
{
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function isGet()
    {
        return $this->getMethod() == 'get' ? true : false;
    }
    public function getFields()
    {
        $dataFields = [];

        if ($this->isGet()) {
            // Xử lý lấy dữ liệu với phương thức GET
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                        echo $dataFields[$key];
                    } else {
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }

        if ($this->isPost()) {
            // Xử lý lấy dữ liệu với phương thức POST
            if (!empty($_POST)) {

                foreach ($_POST as $key => $value) {
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }

            // Xử lý lấy dữ liệu từ các file
            if (!empty($_FILES)) {
                foreach ($_FILES as $key => $file) {
                    $dataFields[$key] = $file;
                }
            }
        }

        return $dataFields;
    }
    public function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === "POST";
    }

    public function getBody(): array
    {
        $body = [];
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }
}

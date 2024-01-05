
<?php
include './App/Models/CoursesModel.php';
include './Config/data.php';


// Kiểm tra xem người dùng đã nhấn nút submit hay chưa

$block = (!empty($_GET['block']) ? $_GET['block'] : '');
$courses_name = find_by_block($block);
include "./App/Views/clients/index.php";
?>
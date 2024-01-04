
<?php
include '../Models/CoursesModel.php';
include '../../Config/data.php';
$block = (!empty($_GET['block']) ? $_GET['block'] : '');
$courses_name = find_by_block($block);
include "../Views/clients/index.php";
?>
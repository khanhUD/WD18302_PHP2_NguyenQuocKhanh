<?php 

function get_all_project(){
    $sql = "SELECT * FROM project_plan ";
    $data = pdo_query($sql);
    return $data;
   
}
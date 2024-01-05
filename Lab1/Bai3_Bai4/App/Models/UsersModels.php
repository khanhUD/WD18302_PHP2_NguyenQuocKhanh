
<?php

include './Config/Config.php';

function get_users_by_email($email){
    $sql = "SELECT * FROM users WHERE email='$email'";
    $userData = pdo_query_one($sql);
    return $userData;
   
}
function get_all_users(){
    $sql = "SELECT email FROM users ";
    $userData = pdo_query($sql);
    return $userData;
   
}
?>

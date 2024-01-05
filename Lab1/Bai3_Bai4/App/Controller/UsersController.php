
<?php
include './App/Models/UsersModels.php';
include './App/Models/ProjectModels.php';   

if (isset($_POST['submit'])) {
    if ($_POST['email']) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }
    $users = get_users_by_email($email);
}
 $emailUsers = get_all_users();
 $projects = get_all_project();
include "./App/Views/View.php";
?>
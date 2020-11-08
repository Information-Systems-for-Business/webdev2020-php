<?php
    require_once('../Modules/Auth/LoginManager.php');
   
    if(isset($_POST['username'])){
        $result = Auth\Login\authenticate($_POST['username'], $_POST['password']);
        include_once "../Templates/Auth/login_results.php";
    } else {
        $newURL = General\Functions\base_url().'index.php';
        header('Location: '.$newURL);
    }
?>
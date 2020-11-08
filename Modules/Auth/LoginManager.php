<?php
   namespace Auth\Login;

   function authenticate ($username, $password) {
    // Do some stuff ...
    return [
       'user_id' => 1,
       'username' => $username,
       'last_login' => '2019-05-01 14:32',
       // Some other stuff ...
    ];
   }
?>
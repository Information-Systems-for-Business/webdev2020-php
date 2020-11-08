<?php
    require('../Templates/_shared/head.php');
?>
<?php
    require('../Templates/_shared/head_close.php');
?>
<?php
    require('../Templates/_shared/body.php');
?>
    <h1>Halo</h1>
    <form action="authentication.php" method='POST'>
        Username: <input type="text" name="username" id="">
        Password: <input type="password" name="password" id="">
        <input type="submit" value="Login">
    </form>
<?php
    require('../Templates/_shared/body_close.php');
?>

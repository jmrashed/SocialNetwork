<?php
include_once("mysql.php");

if (isset($_POST["btnlogin"])) {
    $logres = mysql_query("SELECT * FROM stuacc WHERE email='$_POST[txtemail]' AND password='$_POST[txtpass]' ");

    if (mysql_num_rows($logres) == 1) {
        $_SESSION["logid"] = $_POST["txtemail"];
        header("Location: profile.php");
    } else {
        header("Location: login.php");
    }
}
?> 
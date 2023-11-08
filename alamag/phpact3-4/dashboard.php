<?php
include ("config.php");
include ("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}else {
    echo "Hello <u><b>{$_SESSION['user'] ['name']}</b></u>, welcome my website<br>";
    echo "<a href='logout.php'>Logout</a>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
body {background-color: white;}
h1   {color: black  ;}
p    {color: red;}

.form-container {
  display: grid;
  place-items: center;
  min-height: 50vh;
  width: 500px;
  height: 100px;
  border: 1px solid black;
  padding: 10px;
  margin: 10px;
  background-color: pink;
}

form {


}
</style>
</head>
<body>
<div class="form-container">
   

    <form method="post" action="login_action.php">
    
    <?php
include ("config.php");
include ("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}else {
    echo "<h1>Hello <u><b>{$_SESSION['user'] ['name']}</b></u>, welcome to the website</h1><br>";
    echo "<a href='logout.php' >Logout</a>";
}
?>
</div>
</body>
</html> 
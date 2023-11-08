<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>

    <style>
body {background-color: white;}
h1   {color: blue;}
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
  background-color: powderblue;
}

form {
  width: 50%;
  display: grid;
  place-items: center;
}
</style>
</head>
<body>
<div class="form-container">
    <form method="post" action="signup_action.php">
        <h2> SIGN UP FORM</h2><br>
        Full name<br>
        <input type="text" name="name"><br>
        Email<br>
        <input type="text" name="email"><br>
        Password<br>
        <input type="password" name="password"><br>
        <input type="submit" value="SIGNUP"><br><br>
        Already have an account yet?<a href="login.php">Login</a>
</div>
</body>
</html> 
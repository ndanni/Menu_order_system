<?php 
    include("process.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dane's special meals</title>
    </head>
    <body>
    <form method="POST" action="process.php">
        <fieldset>
        <h3>Dane's special meals(admin)</h3>
        <label for="username">Username</label>
        <input type="text" name= "username" id="username"placeholder="Username" >
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"placeholder="Password">
        <br>
        <button name="sign_in">Sign in</button>
    </fieldset>
    </form>
</body>
</html>
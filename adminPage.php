<?php 
    include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dane's special meals</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div style ="width:70%; margin: 70px auto">
            <h1 class="text-center">Dane's special meals(admin)</h1>
            <form role = "form" method="POST" action="process.php" id="orderTable">
                <div class="row">
                <div class="col-md-6">
                    <label for="username">Username</label>
                    <input type="text"name="username"id="username" class="form-control" placeholder="username">
                </div>
                <div class="col-md-6">
                        <label for="password">Password</label>
                    <input type="password"name= "password"id="password" class="form-control" placeholder="password">
                </div>
                </div>
        <div class="log-in" style="margin: 10px 0;">
        <button type="submit" id="sign_in" name="sign_in" class="btn btn-primary">Log in</button>
            </div>
        </form>
</div>
</div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/pooper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

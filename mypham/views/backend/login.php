<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="././assets/backend/login/style.css"> 
    <title>Login</title>
</head>
<body>
    <div class="loginbox">
        <img src="././assets/backend/login/images/1.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="index.php?area=backend&controller=login&action=login">
            <p>Username</p>
            <input type="text" required name="email" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" required name="password" placeholder="Enter Password"  >
            <input type="submit" value="Login">
<!--             <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account? </a> -->
        </form>
    </div>
</body>
</html>

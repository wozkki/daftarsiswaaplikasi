<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Digiboard</title>
    
    <link rel="stylesheet" href="Login-Regis-style.css">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
     <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body style="background-image: linear-gradient(to right, #a16d0585, #fcaa0875);">
<div class="main-content login-panel">
    <div class="container">
        <h1>Login</h1>
        <br>
        <form method="post" action="">
        <div style="margin-right: 200px; color: orange;" class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Username or email address" required>

        </div>
        <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                        <input type="password" class="form-control rounded-end" placeholder="Password" required>
                        <button style="margin-top: 2rem; background-color: #fcaa08; border: none;" class="btn btn-primary w-100 login-btn">Login</button>
        </form>
        <br>
    </div>
</div>
</body>
</html>
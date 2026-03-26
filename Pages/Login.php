<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php
    include "../inc/header.inc.php";
    ?>
</head>
<body class="offwhite">
    <?php
    include "../inc/nav.inc.php";
    ?>
    <div class="d-flex justify-content-center flex-column align-items-center m-3 p-3 bg-light w-50 rounded mx-auto container">
        <div>
            <h1 class="text-center mb-4 display-1">Welcome</h1>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-key"></i>
            </span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="mx-auto text-center">
            <button class="btn btn-orange px-4" type="submit">Login</button>
        </div>
        <p class="text-center mt-3">Or Sign up <a href="Signup.php">here</a></p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <?php
    include "../includes/header.inc.php";
    ?>
</head>
<body class="offwhite">
    <?php
    include "../includes/nav.inc.php";
    ?>
     <div class="d-flex justify-content-center flex-column align-items-center m-3 p-3 bg-light w-50 rounded mx-auto container">
        <div>
            <h1 class="text-center mb-4 display-1">Vendor Sign Up</h1>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Stall Name" aria-label="StallName" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-at"></i>
            </span>
            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-key"></i>
            </span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-key"></i>
            </span>
            <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user-secret"></i>
            </span>
            <input type="text" class="form-control" placeholder="Invite Code" aria-label="InviteCode" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="file" class="form-control" id="StallPic">
        </div>
        <div class="mx-auto text-center">
            <button class="btn btn-orange px-4" type="submit">Sign Up</button>
        </div>
</body>
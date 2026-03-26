<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <?php
    include "../inc/header.inc.php";
    ?>
</head>

<body class="offwhite">
    <?php
    include "../inc/navvendor.inc.php";
    ?>
    <div
        class="d-flex justify-content-center flex-column align-items-center m-3 p-3 bg-light w-50 rounded mx-auto container">
        <div>
            <h1 class="text-center mb-0 display-1">Edit Food Item</h1>
        </div>
        <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid my-3 rounded w-50">
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Food Name" aria-label="Food Name"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Price" aria-label="Price"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-at"></i>
            </span>
            <textarea class="form-control" placeholder="Description" aria-label="Description"
                aria-describedby="basic-addon1"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-white">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="file" class="form-control" id="ProfilePic">
        </div>
        <div class="mx-auto text-center">
            <button class="btn btn-orange px-4" type="submit">Edit Food</button>
        </div>
</body> 
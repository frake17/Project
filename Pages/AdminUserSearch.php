<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Page</title>
    <?php
    include "../inc/header.inc.php";
    ?>
</head>

<body class="offwhite">
    <?php
    include "../inc/navadmin.inc.php";
    ?>
    <div class="container d-flex justify-content-center flex-column align-items-center p-3">
        <h1 class="text-center mb-4 display-1">Trending stalls around campus</h1>
        <!-- Sort and filter dropdowns -->
        <div class="d-flex flex-column justify-content-center gap-3 w-100">
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3 w-100">
                <div class="dropdown flex-fill">
                    <button class="btn btn-orange dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                        <span id="sortby">Ascending</span>
                    </button>
                    <ul class="dropdown-menu w-100">
                        <li><button class="dropdown-item" onclick="setsort('Ascending')">Ascending</button></li>
                        <li><button class="dropdown-item" onclick="setsort('Descending')">Descending</button></li>
                    </ul>
                </div>

                <div class="dropdown flex-fill">
                    <button class="btn btn-orange dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                        <span id="filterby">Filter By</span>
                    </button>
                    <ul class="dropdown-menu w-100">
                        <li><button class="dropdown-item" onclick="setfilter('By Ratings')">By Ratings</button></li>
                        <li><button class="dropdown-item" onclick="setfilter('Price: Low to High')">Price: Low to
                                High</button></li>
                        <li><button class="dropdown-item" onclick="setfilter('Price: High to Low')">Price: High to
                                Low</button></li>
                        <li><button class="dropdown-item" onclick="setfilter('Newest')">Newest</button></li>
                    </ul>
                </div>
            </div>


        </div>
        <div class="d-flex flex-row justify-content-center align-items-center gap-3 w-100 mt-3">
            <div class="input-group">
                <span class="input-group-text bg-white">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="User Name" aria-label="User Name"
                    aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-light w-25">Search</button>
        </div>
        <!-- Placeholder for food items -->
        <div
            class="d-flex flex-row flex-md-row justify-content-center align-items-center gap-5 border border-black rounded py-3 bg-light mt-4 w-100">
            <img src="../img/User.jpg" alt="User" class="img-fluid ms-3 rounded ProfileImg">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="display-6 mb-0">Username</p>
                <p class="display-6 mb-0">user@example.com</p>
                <p class="display-6 mb-0">Number of ratings: 1</p>
            </div>
            <div>
                <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">Delete
                    Account</button>
            </div>
        </div>

        <div
            class="d-flex flex-row flex-md-row justify-content-center align-items-center gap-5 border border-black rounded py-3 bg-light mt-4 w-100">
            <img src="../img/User.jpg" alt="User" class="img-fluid ms-3 rounded ProfileImg">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="display-6 mb-0">Username</p>
                <p class="display-6 mb-0">user@example.com</p>
                <p class="display-6 mb-0">Number of ratings: 1</p>
            </div>
            <div>
                <button class="btn btn-orange">Delete Account</button>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this account? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
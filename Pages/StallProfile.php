<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Profile</title>
    <?php
    include "../includes/header.inc.php";
    ?>
</head>

<body class="offwhite">
    <?php
    include "../includes/navvendor.inc.php";
    ?>
    <div class="container d-flex flex-row justify-content-center align-items-start gap-3 p-3 mt-3 w-100">
        <!-- Profile Information -->
        <div class="d-flex flex-column justify-content-center align-items-center gap-3 rounded py-3 bg-light w-75">
            <img src="../img/Stall.jpg" alt="Profile Image" class="img-fluid ms-3 rounded w-50">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="display-3 mb-0">Stall Name</p>
                <p class="display-6 mb-0">Email: user@example.com</p>
                <p class="display-6 mb-0">Number of ratings: 1</p>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center gap-3 rounded py-3 bg-light w-100">
            <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                <a href="#" class="display-6 mb-0 tab-btn active p-2" onclick="showTab('AccInfo', event)">Account
                    Information</a>
                <a href="#" class="display-6 mb-0 tab-btn p-2" onclick="showTab('Review', event)">Reviews</a>
                <a href="#" class="display-6 mb-0 tab-btn p-2" onclick="showTab('Menu', event)">Menu</a>
            </div>
            <!-- Account Information Tab -->
            <div id="AccInfo"
                class="tab-content default d-flex flex-column justify-content-center align-items-center gap-3 w-100">
                <!-- Account information User Email -->
                <div class="d-flex flex-row justify-content-center align-items-center gap-3 w-75">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Stall Name" aria-label="Stall Name"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-at"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- Account information User Password -->
                <div class=" d-flex flex-row justify-content-center align-items-center gap-3 w-75">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center gap-3 w-75">
                    <div class="input-group w-50">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="file" class="form-control" id="ProfilePic">
                    </div>
                    <button class="btn btn-orange">Edit Account Information</button>
                </div>
            </div>

            <div id="Review" class="tab-content d-flex flex-column justify-content-center align-items-center">
                <!-- Example review card -->
                <div
                    class="d-flex flex-column justify-content-center align-items-center gap-3 border border-black rounded p-3 mt-3 w-75">
                    <!-- Example review content -->
                    <div class="d-flex flex-row justify-content-center align-items-center gap-3 w-100">
                        <img src="../img/Stall.jpg" alt="Food Image" class="img-fluid ms-3 rounded w-25">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p class="display-6 mb-0">User Name</p>
                            <p class="mb-0">“I was really impressed with this stall. The food came out hot and
                                fresh,
                                and
                                the flavors were well-balanced without being too overwhelming. The portion size was
                                generous
                                for the price, and the ingredients tasted high quality. The staff were also friendly
                                and
                                efficient, which made the whole experience even better. I’ll definitely be coming
                                back
                                to
                                try more items on the menu.”</p>
                        </div>
                    </div>
                    <!-- Example rating chart -->
                    <div class="d-flex flex-row justify-content-center align-items-center gap-3 w-100">
                        <div class="chart-container w-50">
                            <canvas id="ratingChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Menu" class="tab-content d-flex flex-column justify-content-center align-items-center">
                <button class="btn btn-orange w-75">Add Food</button>
                <!-- Example Menu card -->
                <div
                    class="d-flex flex-column justify-content-center align-items-center gap-3 border border-black rounded p-3 mt-3 w-75">
                    <!-- Example Menu content -->
                    <div class="d-flex flex-row justify-content-center align-items-center gap-4 w-100">
                        <img src="../img/Stall.jpg" alt="Food Image" class="img-fluid rounded w-25">
                        <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                            <p class="display-6 mb-0">Food Name</p>
                            <p class="mb-0">Description of the food item.</p>
                            <p class="mb-0">Price: $X.XX</p>
                            <div>
                                <button class="btn btn-light border border-black">Edit</button>
                                <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
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
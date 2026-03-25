<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stall Page</title>
    <?php
    include "../inc/header.inc.php";
    ?>
</head>

<body class="offwhite">
    <?php
    include "../inc/nav.inc.php";
    ?>
    <div class="d-flex justify-content-center flex-column align-items-center m-3 w-80 rounded mx-auto">
        <!-- Store Information -->
        <div class="stall-card position-relative rounded overflow-hidden w-100">

            <img src="../img/Stall.jpg" class="card-img w-100 h-100 object-fit-cover" alt="Stall Image">

            <div
                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 text-white p-4 rounded">

                <div class="bg-white text-dark p-3 rounded text-center rounded w-50">
                    <h4 class="mb-2 display-5" id="StallName">Stall Name</h4>
                    <p class="mb-1" id="Location">Canteen 1</p>
                    <p class="mb-2" id="Hours">Opening Hours</p>
                    <div class="chart-container ">
                        <canvas id="ratingChart2"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <!-- Menu Section -->
        <div class="container mt-4">

            <h1 class="text-center mb-4 display-4">Menu</h1>
            <div class="d-flex flex-wrap justify-content-center gap-3">

                <!-- Food Item Card -->
                <div class="d-flex flex-row align-items-center gap-3 rounded p-3 bg-light"
                    style="max-width: 600px; width: 100%;">

                    <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid rounded"
                        style="width: 120px; height: 120px; object-fit: cover;">

                    <div class="d-flex flex-column justify-content-center align-items-start gap-1">
                        <p class="display-6 mb-0">Food Name</p>
                        <p class="mb-0">Price: $X.XX</p>
                        <p class="mb-0">Description</p>
                    </div>

                </div>

                <div class="d-flex flex-row align-items-center gap-3 rounded p-3 bg-light"
                    style="max-width: 600px; width: 100%;">

                    <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid rounded"
                        style="width: 120px; height: 120px; object-fit: cover;">

                    <div class="d-flex flex-column justify-content-center align-items-start gap-1">
                        <p class="display-6 mb-0">Food Name</p>
                        <p class="mb-0">Price: $X.XX</p>
                        <p class="mb-0">Description</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- Reviews Section -->
        <div class="container mt-4">

            <h1 class="text-center mb-4 display-4">Ratings</h1>
            <div class="d-flex flex-wrap justify-content-center gap-3">

                <!-- Rating Card -->
                <div class="d-flex flex-row align-items-center gap-3 rounded p-3 bg-light"
                    style="max-width: 600px; width: 100%;">

                   <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid rounded w-25">

                    <div class="d-flex flex-column justify-content-center align-items-start gap-1">
                        <div class="d-flex flex-row align-items-center gap-1">
                            <p class="display-6 mb-0">User Name</p>
                            <img src="../img/User.jpg" alt="User" class="img-fluid rounded w-25">
                        </div>
                        <p class="mb-0">Description</p>
                        <div class="chart-container">
                            <canvas id="ratingChart"></canvas>
                        </div>
                    </div>

                </div>

                <div class="d-flex flex-row align-items-center gap-3 rounded p-3 bg-light"
                    style="max-width: 600px; width: 100%;">

                    <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid rounded w-25">

                    <div class="d-flex flex-column justify-content-center align-items-start gap-1">
                        <div class="d-flex flex-row align-items-center gap-1">
                            <p class="display-6 mb-0">User Name</p>
                            <img src="../img/User.jpg" alt="User" class="img-fluid rounded w-25">
                        </div>
                        <p class="mb-0">Description</p>
                        <div class="chart-container">
                            <canvas id="ratingChart2"></canvas>
                        </div>
                    </div>

                </div>

            </div>

        </div>

</body>

</html>
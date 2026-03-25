<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script defer src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="offwhite">
    <?php
    include "../inc/nav.inc.php";
    ?>
    <div class="d-flex justify-content-center flex-column align-items-center p-3">
        <h1 class="text-center mb-4 display-1">Trending stalls around campus</h1>
        <!-- Sort and filter dropdowns -->
        <div class="d-flex flex-column flex-md-row justify-content-center gap-3 w-80">
            <div class="dropdown flex-fill">
            <button class="btn btn-orange dropdown-toggle w-100 d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown">
                <span id="sortby">Ascending</span>
            </button>

            <ul class="dropdown-menu w-100">
                <li><button class="dropdown-item" onclick="setsort('Ascending')">Ascending</button></li>
                <li><button class="dropdown-item" onclick="setsort('Descending')">Descending</button></li>
            </ul>
        </div>
        <div class="dropdown flex-fill">
            <button class="btn btn-orange dropdown-toggle w-100 d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown">
                <span id="filterby">Filter By</span>
            </button>
            <ul class="dropdown-menu w-100">
                <li><button class="dropdown-item" onclick="setfilter('By Ratings')">By Ratings</button></li>
                <li><button class="dropdown-item" onclick="setfilter('Price: Low to High')">Price: Low to High</button></li>
                <li><button class="dropdown-item" onclick="setfilter('Price: High to Low')">Price: High to Low</button></li>
                <li><button class="dropdown-item" onclick="setfilter('Newest')">Newest</button></li>
            </ul>
        </div>
        </div>
        <!-- Placeholder for food items -->
        <div class="d-flex flex-row flex-md-row justify-content-center align-items-center gap-3 border border-black rounded bg-light p-3 mt-4">
            <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid ms-3 rounded">
            <div class = "d-flex, flex-column, justify-content-center, align-items-center">
                <h1>Stall Name</h1>
                <!-- Might convert to $ like google -->
                <h3>Prices range</h3>
            </div>
            <div class="chart-container">
                <canvas id="ratingChart"></canvas>
            </div>
        </div>
        
        <div class="d-flex flex-row flex-md-row justify-content-center align-items-center gap-3 border border-black rounded bg-light p-3 mt-4">
            <img src="../img/foodimg.jpg" alt="Food Image" class="img-fluid ms-3 rounded">
            <div class = "d-flex, flex-column, justify-content-center, align-items-center">
                <h1>Stall Name</h1>
                <h3>Prices range</h3>
            </div>
            <div class="chart-container">
                <canvas id="ratingChart2"></canvas>
            </div>
        </div>
    </div>
</body>
</html>
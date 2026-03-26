<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center fs-2 me-5" href="../Pages/Welcome.php">
      Website Name
      <i class="fa-solid fa-utensils ms-3"></i>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-4 d-flex align-items-center gap-1" href="#" role="button"
            data-bs-toggle="dropdown">
            Canteen
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Pages/Canteen.php">Canteen 1</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-4" href="#">Rating</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-4" href="#">About us</a>
        </li>
      </ul>

      <div class="d-flex ms-auto">

        <!-- Login Dropdown -->
        <div class="dropdown me-2">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Login
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="../Pages/Login.php">Login as User</a></li>
            <li><a class="dropdown-item" href="../Pages/Login.php">Login as Vendor</a></li>
          </ul>
        </div>

        <!-- Sign Up Dropdown -->
        <div class="dropdown">
          <button class="btn btn-orange dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Sign Up
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="../Pages/Signup.php">Sign up as User</a></li>
            <li><a class="dropdown-item" href="../Pages/VendorSignUp.php">Sign up as Vendor</a></li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</nav>
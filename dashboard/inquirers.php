<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to login page if not logged in
    header("Location: http://localhost/login.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Database connection parameters
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "virtacalls";

$conn = new mysqli($servername, $name, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM inquirers ORDER BY id DESC";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />
    <title>Applicants</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<style>
    body {
        font-family: sans-serif !important;
        color: #161e63;
    }

    .text1 {
        color: #161e63;
        font-weight: bold;
    }

    .text2 {
        color: #676a72;
        font-weight: bold;
    }

    .status-btn {
        cursor: pointer;
        color: #fff;
    }

    .accept-btn {
        background-color: #34b634;
    }

    .reject-btn {
        background-color: #ff2424;
    }

    .navbar-logo a {
        display: flex;
        justify-content: space-between;
    }
    td{
      font-size:16px;
    }
    img {
        width: 40%;
    }
    .username{
      text-align: end;
      padding-left:30px;
      padding-right:20px;
    }
    .avatar-img {
    width: 40px; /* Adjust the width of the circular profile picture */
    height: 40px; /* Adjust the height of the circular profile picture */
}
</style>
<body>
<div id="preloader">
    <div class="spinner"></div>
</div>
<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="http://localhost/virta%20calls/dashboard/applicants.php">
            <img src="assets/images/logo.png" alt="">
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>

            <li class="nav-item">
                <a href="http://localhost/virta%20calls/dashboard/applicants.php">
                    <span class="text text2">Applicants</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/virta%20calls/dashboard/inquirers.php">
                    <span class="text text1">Inquirers</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/logout.php">
                    <span class="text text2">Logout</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>
<div class="overlay"></div>
<main class="main-wrapper">
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-6">
                    <div class="header-left d-flex align-items-center">
                        <div class="menu-toggle-btn mr-15">
                            <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                <i class="lni lni-chevron-left me-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-6">
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <!-- Circular profile picture -->
                        <div class="avatar">
                            <img src="assets/images/unnamed.jpg" alt="Profile Image" class="avatar-img rounded-circle">
                        </div>
                        <!-- Username -->
                        <h6 class="username"><?php echo $username; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="table-components">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Applicants</h2>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" action="https://virta-calls.com/dashboard/export.php">
                <input type="submit" name="export" class="btn btn-success" value="Export" style="background-color: #161e63; color: #ffffff; border:none; margin-bottom:2%;margin-left:auto" />
            </form>
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><h5><center>N°</center> </h5></th>
                                        <th><h5><center>Name</center></h5></th>
                                        <th><h5><center>Email</center></h5></th>
                                        <th><h5><center>Phone</center></h5></th>
                                        <th><h5><center>Date</center></h5></th>
                                        <th><h5><center>Messege</center></h5></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        $rowNumber = 1; 

                                        while ($row = $result->fetch_assoc()) {
                                            echo "<td><center><p>" . $rowNumber . "</p></center></td>";
                                            echo "<td><center><p>" . $row["name"] . "</p></center></td>";
                                            echo "<td><center><p>" . $row["email"] . "</p></center></td>";
                                            echo "<td><center><p>" . $row["phone_number"] . "</p></center></td>";
                                            echo "<td><center><p>" . $row["message"] . "</p></center></td>";
                                            echo "<td><center><p>" . $row["registration_date"] . "</p></center></td>";
                                            echo "</tr>";

                                            $rowNumber++; // Increment row number for the next iteration
                                        }
                                    } else {
                                        echo "<tr><td colspan='8'>0 results</td></tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<style>
        /* Add CSS style for the delete button */
        .delete-btn {
            background-color: #ff2424; /* Red color */
            color: #fff; /* Text color */
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Optionally, you can add styles to change button appearance on hover or focus */
        .delete-btn:hover,
        .delete-btn:focus {
            background-color: #d61d1d; /* Darker red color on hover or focus */
        }
    </style>

<!-- ========= All Javascript files linkup ======== -->
<script src="assets/js/jquery-3.6.0.min.js"></script> <!-- Add jQuery -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/

Chart.min.js"></script>
<script src="assets/js/dynamic-pie-chart.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.js"></script>
<script src="assets/js/jvectormap.min.js"></script>
<script src="assets/js/world-merc.js"></script>
<script src="assets/js/polyfill.js"></script>
<script src="assets/js/main.js"></script>



</body>

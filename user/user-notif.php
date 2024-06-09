<?php
// USER: NOTIF Interface
include '../config/connect.php';
session_start();

if (!isset($_SESSION['user'])) {
    header('location:../login.php');
} else if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['verified'] == 0) {
        header('location:../verify.php');
    }
}

$user = $_SESSION['user']['userID'];
?>
<!DOCTYPE HTML>

<html>

<?php
include '../include/head.php';
include '../include/header.php';
?>

<body class="is-preloadd">

    <!-- Header -->
    <div id="header">
        <?php include '../include/profile.php'; ?>
        <hr class="text-dark w-75 m-auto">
        <div class="top">
            <!-- Nav -->
            <nav id="nav" class="menu">
                <div class="list-group list-group-flush mx-3 mt-3">
                    <a href="user-index.php" class="list-group-item  py-2 ripple">
                        <i class='bx bxs-dashboard icon'></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <a href="user-jobrequest.php" class="list-group-item  py-2 ripple">
                        <i class="fa-solid fa-toolbox icon"></i>
                        <span class="nav-text">Job Request</span>
                    </a>
                    <a href="user-records.php" class="list-group-item  py-2 ripple">
                        <i class="fa-solid fa-folder icon"></i>
                        <span class="nav-text">Equipment Records</span>
                    </a>
                    <a href="user-notice.php" class="list-group-item  py-2 ripple">
                        <i class="fa-solid fa-snowflake icon"></i>
                        <span class="nav-text">Aircon Maintenance</span>
                    </a>
                    <a href="user-inventory.php" class="list-group-item  py-2 ripple">
                        <i class="fa-solid fa-box-open icon"></i>
                        <span class="nav-text">Inventory</span>
                    </a>
                    <a href="user-archives.php" class="list-group-item  py-2 ripple">
                        <i class="fa-solid fa-box-archive icon"></i>
                        <span class="nav-text">Archives</span>
                    </a>
                    <a href="user-logs.php" class="list-group-item  py-2 ripple">
                        <i class="fa-solid fa-clock-rotate-left icon"></i>
                        <span class="nav-text">Logs</span>
                    </a>
                </div>
            </nav>
        </div>

        <?php include '../include/logout-div.php'; ?>

    </div>

    <!-- Main -->
    <div id="main">
        <section id="" class="">
            <div id="content" class="content mt-5">
                <div class="container-fluid overflow-auto pb-5">

                    <div class="table-div container-fluid ps-5 pe-5">
                        <div id="" class="notif content-title d-flex justify-content-between align-items-center mt-3 ps-5 pe-5">
                            <h3>Notifications</h3>
                            <div id="notifbtn" class="d-flex justify-content-evenly">
                                <button id="read-all" name="read-all" type="button" class="btn btn-outline-secondary d-flex justify-content-center align-items-center m-1">
                                    Mark all as read <i class="fa-solid fa-check-double ms-1 me-1"></i>
                                </button>
                            </div>
                        </div>
                        <div class="table-div h-100 ps-5 pe-5 pb-3 bg-body overflow-auto">
                            <div class="">
                                <div class="list-group mx-3 mt-3" id="notifications"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <?php include '../include/scripts.php'; ?>

</body>

</html>
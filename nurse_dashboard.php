<?php
session_start();
require 'connect.php';

if(!isset($_SESSION['user'])){
    header('location:nurse_login.php');
}else{
    if($_SESSION['user']['role'] !== 'nurse'){
        header('location:index.php');
    }
}


?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- awesome font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/calendar.css">

    <title>GCC Centre</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
<?php
if(isset($_POST['logout_button'])){
    session_destroy();
    header('location:index.php');
}

?>


<div class="sidebar">

    <div class="logo">

        <ul class="menu">
            <li>
                <a href="#"><i class="fa-solid fa-gauge-high"></i><span>Dahsboard</span></a>
            </li>

            <li class="mb-5">
                <a href="schedule.php"><i class="fa-regular fa-clipboard"></i><span>Schedule</span></a>
            </li>


        </ul>

    </div>
</div>


<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Nurse</span>
            <h2>Dashboard</h2>
        </div>

        <div class="user--info">

            <?php echo "Hi, ". $_SESSION['user']['name']; ?>

<!--            <img src="images/admin.jpg" alt="">-->

            <form action="doctor_dashboard.php" method="POST" class="logout_button">
                <button type="submit" name="logout_button" id="logout_button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to logout?')">Logout</button>

            </form>

        </div>


    </div>


    <div class="card--container">
        <h3 class="main--title">Today's data</h3>
        <div class="card--wrapper">

            <!-- Total Senior -->
            <div class="payment--card light-blue">
                <div class="card--header">
                    <div class="amount">
                        <span class="title fs-4">Senior Living</span>
                        <span class="amount-value">
                            <?php
                            $senior_query_run = mysqli_query($db,"SELECT * FROM senior");

                            if($senior_total = mysqli_num_rows($senior_query_run )){
                                echo "<h2>". $senior_total . "</h2>";
                            }else{
                                echo "<span>No data</span>";
                            }

                            ?>
                        </span>
                    </div>

                    <i class="icon fa-solid fa-person-cane dark-brown"></i>
                </div>

            </div>

            <!-- Total Doctor -->
            <div class="payment--card light-green">
                <div class="card--header">
                    <div class="amount">
                        <span class="title fs-4">Doctors</span>
                        <span class="amount-value">
                           <?php
                           $doctor_query_run = mysqli_query($db,"SELECT * FROM doctor");

                           if($doctor_total = mysqli_num_rows($doctor_query_run)){
                               echo "<h2>". $doctor_total. "</h2>";
                           }else{
                               echo "<span>No data</span>";
                           }

                           ?>
                        </span>
                    </div>

                    <i class="icon fa-solid fa-user-doctor dark-purple"></i>
                </div>

            </div>

            <!-- Total Nurse -->
            <div class="payment--card light-purple">
                <div class="card--header">
                    <div class="amount">
                        <span class="title fs-4">Nurse Staff</span>
                        <span class="amount-value">
                            <?php
                            $nurse_query_run = mysqli_query($db,"SELECT * FROM nurse");

                            if($nurse_total = mysqli_num_rows($nurse_query_run)){
                                echo "<h2>". $nurse_total . "</h2>";
                            }else{
                                echo "<span>No data</span>";
                            }

                            ?>
                        </span>
                    </div>

                    <i class="icon fa-solid fa-user-nurse dark-green"></i>
                </div>

            </div>

        </div>
    </div>
    <!-- Event Calendar -->
    <div class="tabular--wrapper">
        <h3 class="main--title">Events Calendar</h3>
        <div class="container w-75 h-75" mt-5">

        <div class="left">
            <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">december 2015</div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days"></div>
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="mm/yyyy" class="date-input" />
                        <button class="goto-btn">Go</button>
                    </div>
                    <button class="today-btn">Today</button>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="today-date">
                <div class="event-day">wed</div>
                <div class="event-date">12th december 2022</div>
            </div>
            <div class="events"></div>
            <div class="add-event-wrapper">
                <div class="add-event-header">
                    <div class="title">Add Event</div>
                    <i class="fas fa-times close"></i>
                </div>
                <div class="add-event-body">
                    <div class="add-event-input">
                        <input type="text" placeholder="Event Name" class="event-name" />
                    </div>
                    <div class="add-event-input">
                        <input
                                type="text"
                                placeholder="Event Time From"
                                class="event-time-from"
                        />
                    </div>
                    <div class="add-event-input">
                        <input
                                type="text"
                                placeholder="Event Time To"
                                class="event-time-to"
                        />
                    </div>
                </div>
                <div class="add-event-footer">
                    <button class="add-event-btn">Add Event</button>
                </div>
            </div>
        </div>
        <button class="add-event">
            <i class="fas fa-plus"></i>
        </button>

    </div>

</div>



<script src="js/calendar.js"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>

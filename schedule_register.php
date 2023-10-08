<?php

session_start();
require('connect.php');

if (!isset($_SESSION['user'])) {
    header('location:doctor_login.php');
}


?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- awesome font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="css/schedule.css.css">

    <title>GCC Centre</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="js/script.js"></script>

    <!-- date picker -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/schedule.css">
</head>
<body>

<?php

//for Dr. name


$results = mysqli_query($db, $query = "SELECT * FROM doctor");

$user = mysqli_fetch_assoc($results);

$user_id = $user['id'];

//register
$name = "";
$qualification = "";
$specialty = "";
$day1 = "";
$start1 = "";
$end1 = "";
$day2 = "";
$start2 = "";
$end2 = "";
$day3 = "";
$start3 = "";
$end3 = "";
$day4 = "";
$start4 = "";
$end4 = "";


//for dr qualification


$dr_qualification = mysqli_query($db, "SELECT * FROM qualification");

//$dr_qualification = mysqli_fetch_assoc($results);


//for dr specialty


$dr_specialty = mysqli_query($db, "SELECT * FROM specialty");



if (isset($_POST['reg_schedule'])) {

    $doctor_id = $_POST['id'];

    $result1 = mysqli_query($db, "SELECT * FROM doctor where id=$doctor_id");
    $doctor = mysqli_fetch_assoc($result1);
    $name = $doctor['name'];


    $qualification_id = $_POST['qualification'];

    $result2 = mysqli_query($db, "SELECT * FROM qualification where id=$qualification_id");
    $qualification= mysqli_fetch_assoc($result2);
    $qualification_name = $qualification['name'];

    $specialty_id = $_POST['specialty'];

    $result3 = mysqli_query($db, "SELECT * FROM specialty where id=$specialty_id");
    $specialty= mysqli_fetch_assoc($result3);
    $specialty_name = $specialty['name'];

    $day1 = $_POST['day1'];
    $start1 = $_POST['start1'];
    $end1 = $_POST['end1'];
    $day2 = $_POST['day2'];
    $start2 = $_POST['start2'];
    $end2 = $_POST['end2'];
    $day3 = $_POST['day3'];
    $start3 = $_POST['start3'];
    $end3 = $_POST['end3'];
    $day4 = $_POST['day4'];
    $start4 = $_POST['start4'];
    $end4 = $_POST['end4'];


    $query = "INSERT INTO schedule(doctor_id,name,qualification,specialty,day1,start1,end1,day2,start2,end2,day3,start3,end3,day4,start4,end4) 
        VALUES('$doctor_id','$name','$qualification_name','$specialty_name','$day1','$start1','$end1','$day2','$start2','$end2','$day3','$start3','$end3','$day4','$start4','$end4')";



    $result4 = mysqli_query($db, $query);

    if ($result4) {

        ?>
        <script type="text/javascript">
            swal({
                title: "Registration Successful",
                // text: "You clicked the button!",
                icon: "success",
                button: "Ok",
            });
        </script>
        <?php


    } else {
        echo "Not inserted";
    }
}


?>


<section id="contact">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header mb-3 p-3">

                <div class="row">
                    <div class="col-md-12"><h3 class="text-primary fw-bold text-center">GCC Center</h3></div>


                    <div>
                        <form action="schedule_admin.php" method="POST" class="float-start">
                            <button type="submit" name="back_button" id="back_button" class="btn btn-success btn-sm">Back</button>
                        </form>

                        <form action="admin_dashboard.php" method="POST" class="float-end ms-2">
                            <button type="submit" name="logout_button" id="logout_button" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to logout?')">Logout
                            </button>

                        </form>

                    </div>
                </div>

            </div>
            <div class="card-body">

                <div class="container">
                    <h4 class="text-center">Doctor's Schedule Registration Form</h4>
                    <form action="schedule_register.php" method="POST">
                        <div class="row mt-5">

                            <!-- name -->
                            <div col-md-12>
                                <label for="inputAddress" class="form-label">Name:</label>
                                <div class="input-group">

                             <span class="input-group-text">
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                    <select class="form-select" id="subject" name="id">

                                        <option selected>Choose...</option>
                                        <?php foreach ($results as $user) { ?>

                                            <option value="<?php echo $user['id']; ?> "><?php echo $user['name']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>



                            <!-- qualification -->
                            <div class="col-md-12">
                                <label for="inputAddress" class="form-label mt-3">Qualification:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </span>
                                    <select class="form-select" id="qualification" name="qualification">

                                        <option selected>Choose...</option>
                                        <?php foreach ($dr_qualification as $q) { ?>

                                            <option value="<?php echo $q['id']; ?> "><?php echo $q['name']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <!-- specialty -->
                            <div class="col-md-12">
                                <label for="inputAddress" class="form-label mt-3">Specialty:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-stethoscope"></i>
                                    </span>
                                    <select class="form-select" id="specialty" name="specialty">

                                        <option selected>Choose...</option>
                                        <?php foreach ($dr_specialty as $s) { ?>

                                            <option value="<?php echo $s['id']; ?> "><?php echo $s['name']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>



                            <!-- day1 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Day:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <select class="form-select" id="day1" name="day1">

                                        <option value="-">Choose...</option>

                                        <option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thu">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                        <option value="Sun">Sunday</option>
                                        <option value="Mon-Fri">Monday - Friday</option>
                                    </select>
                                </div>
                            </div>


                       <!-- st 1 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Start Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="start1" name="start1">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>


                            <!-- end 1 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">End Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="end1" name="end1">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>



                            <!-- day2 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Day:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <select class="form-select" id="day2" name="day2">

                                        <option value="-">Choose...</option>

                                        <option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thu">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                        <option value="Sun">Sunday</option>
                                        <option value="Mon-Fri">Monday - Friday</option>
                                    </select>
                                </div>
                            </div>

                            <!-- st 2 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Start Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="start2" name="start2">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>

                            <!-- end 2 -->

                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">End Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="end2" name="end2">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>

                            <!-- day3 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Day:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <select class="form-select" id="day3" name="day3">

                                        <option value="-">Choose...</option>

                                        <option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thu">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                        <option value="Sun">Sunday</option>
                                        <option value="Mon-Fri">Monday - Friday</option>
                                    </select>
                                </div>
                            </div>

                            <!-- st 3 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Start Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="start3" name="start3">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>

                            <!-- end 3 -->

                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">End Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="end3" name="end3">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>


                            <!-- day4 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Day:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <select class="form-select" id="day4" name="day4">

                                        <option value="-">Choose...</option>

                                        <option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thu">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                        <option value="Sun">Sunday</option>
                                        <option value="Mon-Fri">Monday - Friday</option>
                                    </select>
                                </div>
                            </div>

                            <!-- st 4 -->
                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">Start Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="start4" name="start4">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>

                            <!-- end 4 -->

                            <div class="col-md-4">
                                <label for="inputAddress" class="form-label mt-3">End Time:</label>
                                <div class="input-group">
                             <span class="input-group-text">
                                       <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <select class="form-select" id="end4" name="end4">

                                        <option value="-" selected>Choose...</option>

                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="Night Duty">Night Duty</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary" name="reg_schedule">Register</button>
                            </div>
                    </form>
                </div>
            </div>


            <!-- end -->


        </div>
    </div>
    </div>
    </div>
    </div>
</section>

<!-- date picker -->
<script type="text/javascript">
    $(function () {
        $('#datepicker').datepicker();
    });
</script>


<!-- Bootstrap js  -->

<script>
    src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>


</body>
</html>



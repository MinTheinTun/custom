<?php
session_start();

require 'connect.php';

if(!isset($_SESSION['user'])){
    header('location:admin_login.php');
}


if (isset($_POST['logout_button'])) {
    session_destroy();
    header('location:index.php');
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


    <title>GCC Centre</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- data table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style type="text/css">
        th{
            background-color: rgba(113,99,186,255) !important;
            text-align: center !important;
            color:white !important;
            padding: 2px!important;
            text-align: center !important;
        }
        tr {
            text-align: center !important;
        }


    </style>



</head>
<body>


<div class="container-fluid">
    <div class="card">
        <div class="card-header mb-3 p-3">

            <div class="row">
                <div class="col-md-12"><h3 class="text-primary fw-bold text-center">GCC Center</h3></div>


                <div>

                    <form action="admin_dashboard.php" method="POST" class="float-end ms-2">
                        <button type="submit" name="logout_button" id="logout_button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to logout?')">Logout</button>

                    </form>

                </div>
            </div>

        </div>

        <div class="card-body">
            <h4 class="text-center">Dr. Schedule Detail Page</h4>
            <!-- table -->
            <div class="container-fluid mt-5">

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Dr.Name</th>
                        <th>Qualification</th>
                        <th>Specialty</th>
                        <th>Day</th>
                        <th>ST</th>
                        <th>ET</th>
                        <th>Day</th>
                        <th>ST</th>
                        <th>ET</th>
                        <th>Day</th>
                        <th>ST</th>
                        <th>ET</th>
                        <th>Day</th>
                        <th>ST</th>
                        <th>ET</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $query = "SELECT * FROM schedule";
                    $results = mysqli_query($db, $query);
                    foreach($results as $user) {
                        ?>
                        <tr>
                            <td><?php echo  $user['id'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['qualification'] ?></td>
                            <td><?php echo $user['specialty'] ?></td>
                            <td class="text-primary" id="s_day"><?php echo  $user['day1'] ?></td>
                            <td><?php echo $user['start1'] ?></td>
                            <td><?php echo $user['end1'] ?></td>
                            <td class="text-primary"><?php echo $user['day2'] ?></td>
                            <td><?php echo $user['start2'] ?></td>
                            <td><?php echo $user['end2'] ?></td>
                            <td class="text-primary"><?php echo $user['day3'] ?></td>
                            <td><?php echo $user['start3'] ?></td>
                            <td><?php echo $user['end3'] ?></td>
                            <td class="text-primary"><?php echo $user['day4'] ?></td>
                            <td><?php echo $user['start4'] ?></td>
                            <td><?php echo $user['end4'] ?></td>
                        </tr>

                        <?php
                    }
                    ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example');
    </script>


    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

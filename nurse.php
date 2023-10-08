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

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

<?php

//import id for delete
if(isset($_GET['user_id_to_delete'])){
    $user_id_to_delete = $_GET['user_id_to_delete'];

    $query = "DELETE FROM nurse WHERE id=$user_id_to_delete";

    $result = mysqli_query($db, $query);

    if($result){

        ?>
        <script type="text/javascript">
            swal({
                title: "Deleted Successful",
                // text: "You clicked the button!",
                icon: "success",
                button: "Ok",
            });
        </script>
        <?php

    }else{
        die('Error'. mysqli_connect_error($result));
    }
}

?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header mb-3 p-3">

            <div class="row">
                <div class="col-md-12"><h3 class="text-primary fw-bold text-center">GCC Center</h3></div>


                <div>

                    <form action="admin_dashboard.php" method="POST" class="float-end ms-2">
                        <button type="submit" name="logout_button" id="logout_button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to logout?')">Logout</button>

                    </form>


                    <form action="admin_dashboard.php" method="POST" class="float-start">
                        <button type="submit" name="back_button" id="back_button" class="btn btn-success btn-sm">Back</button>
                    </form>
<!--                    <button type="button" name="back_button" id="back_button" class="btn btn-success btn-sm" onclick="history.back()";>Back</button>-->



                    <form action="nurse_register.php" method="POST" class="float-end ms-2" >
                        <button type="submit" name="doctor_register_button" id="doctor_register_button" class="btn btn-primary btn-sm">Register</button>

                    </form>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="text-center" id="page">Nurse Detail Page</h4>
                    <!-- table -->
                    <div class="container-fluid mt-5">

                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Nrc. No</th>
                                <th>Qualification</th>
                                <th>Phone No.</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>

                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $query = "SELECT * FROM nurse";
                            $results = mysqli_query($db, $query);
                            foreach($results as $user) {
                                ?>
                                <tr>
                                    <td width="2%"><?php echo $user['id'] ?></td>
                                    <td width="5%"><img src="uploads/<?php echo $user['image']; ?>" alt=""></td>
                                    <td width="5%"><?php echo $user['name']; ?></td>
                                    <td width="2%"><?php echo $user['dob']; ?></td>
                                    <td width="2%"><?php echo $user['gender']; ?></td>
                                    <td width="8%"><?php echo $user['nrc']; ?></td>
                                    <td width="5%"><?php echo $user['qualification']; ?></td>
                                    <td width="2%"><?php echo $user['phone']; ?></td>
                                    <td width="10%"><?php echo $user['address']; ?></td>
                                    <td width="1%"><?php echo $user['email']; ?></td>
                                    <td width="3%"><?php echo $user['role']; ?></td>
                                    <td width="2%"><div><a href="nurse_edit.php?user_id_to_update=<?php echo $user['id']; ?>" title="Update" class="btn btn-primary text-center btn-sm mb-3"><i class="fa-solid fa-pen-to-square"></i></a></div>

                                        <div><a href="nurse.php?user_id_to_delete=<?php echo $user['id']; ?>" title="Delete" class="btn btn-danger  text-center btn-sm" onclick="return confirm('Are you sure you want to delete');"><i class="fa-solid fa-trash"></i></a></div>

                                    </td>
                                </tr>

                                <?php
                            }
                            ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div>
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

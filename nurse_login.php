<?php
session_start();
require ('connect.php');


?>




<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- awesome font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <title>GCC Centre</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- date picker -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


</head>
<body>

<?php
$loginError = "";

if(isset($_POST['loginButton'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM nurse WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $query);
    $userCount = mysqli_num_rows($result);


    if($userCount === 1) {
        $user_array = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $user_array;
        if ($user_array['role'] == 'admin') {
            header('location:admin_dashboard.php');

        } else if ($user_array['role'] == 'doctor') {
            header('location:doctor_dashboard.php');

        } else if ($user_array['role'] == 'nurse') {
            header('location:nurse_dashboard.php');

        } else {
            echo "Error";

        }

    } else {
        $loginError = "Invalid Email or Password";
    }
}

if(isset($_POST['cancel_button'])){
    header('location:index.php');
}



?>




<!-- registration form -->
<section id="contact">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="title">
                    <div class="text-center">
                        <h3 class="text-primary mb-3 fw-bold mt-2">GCC Centre</h3>
                        <h4>Nurse Login</h4>
                    </div>
<!--                    <div>-->
<!--                        <form action="index.php" method="POST" class="float-start">-->
<!--                            <button type="submit" name="back_button" id="back_button" class="btn btn-success btn-sm">Back</button>-->
<!--                        </form>-->
<!--                    </div>-->


                </div>
            </div>
            <div class="card-body">
                <?php if($loginError != "") : ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong><?php echo $loginError; ?></strong> You should check in on some of those fields below.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php  endif; ?>

                <div class="container-lg">

                    <div class="row justify-content-center my-5">
                        <div class="col-lg-6">
                            <form action="nurse_login.php" method="POST">

                                <label for="email" class="form-label mt-3">Email:</label>
                                <div class="mb-4 input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" name="email" id="email"
                                           placeholder="e.g. nurse@gmail.com">
                                </div>

                                <label for="password" class="form-label">Password:</label>
                                <div class="mb-4 input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="e.g. 123456">
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="loginButton" class="btn btn-primary">Login</button>
                                    <button type="submit" name="cancel_button" class="btn btn-secondary">Cancel</button>
                                </div>


                            </form>
                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>





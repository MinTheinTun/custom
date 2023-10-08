<?php


session_start();
if (!isset($_SESSION['user'])) {
    header('location:doctor_login.php');
}


require 'connect.php';
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

    <!-- date picker -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>


<?php
$user_id = '';
$user_name= '';
$user_dob= '';
$user_nrc= '';
$user_image= '';
$user_qualification = '';
$user_specialty = '';
$user_phone= '';
$user_address= '';
$user_email = '';
$user_gender = "";
$user_password = '';
$user_confirm = '';
$user_role = '';

//import id
if (isset($_GET['user_id_to_update'])) {

    $user_id_to_update = $_GET['user_id_to_update'];

    $query = "SELECT * FROM doctor WHERE id=$user_id_to_update";

    $result = mysqli_query($db, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        $user_id = $user['id'];
        $user_name= $user['name'];
        $user_qualification= $user['qualification'];
        $user_specialty = $user['specialty'];
        $user_dob= $user['dob'];
        $user_nrc= $user['nrc'];
        $user_image= $user['image'];
        $user_phone= $user['phone'];
        $user_address= $user['address'];
        $user_email = $user['email'];
        $user_gender = $user['gender'];
        $user_password = $user['password'];
        $user_confirm = $user['confirm'];
        $user_role = $user['role'];
        //echo $user['name'];
    } else {
        die("Error: " . mysqli_error($db));
    }
}


//for update

if (isset($_POST['update_button'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nrc = $_POST['nrc'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $qualification = $_POST['qualification'];
    $specialty = $_POST['specialty'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $role = $_POST['role'];

//    if ($_FILES['image']['error'] === 4) {
//        echo "<script>alert('Image Does not Exist');</script>";
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $tmpName = $_FILES['image']['tmp_name'];

    $validImageExtension = ['jpg', 'jpeg', '.png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
        echo "<script>alert('Invalid Image Extension');</script>";
    } else if ($fileSize > 100000) {
        echo "<script>alert('Image size is too large.');</script>";
    } else {
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        $img_upload_path = 'uploads/' . $newImageName;

        move_uploaded_file($tmpName, $img_upload_path);

        $query = "UPDATE doctor SET name='$name', qualification='$qualification', specialty= '$specialty', dob='$dob',gender='$gender',nrc='$nrc',image='$newImageName',phone='$phone',address='$address',email='$email',password='$password',confirm='$confirm',role='$role' WHERE id=$user_id";

        $result = mysqli_query($db, $query);


        if ($result) {
            ?>
            <script type="text/javascript">
                swal({
                    title: "Update Successful",
                    // text: "You clicked the button!",
                    icon: "success",
                    button: "Ok",
                });
            </script>
            <?php


//            header("Location:senior_edit.php");
        } else {
            die('Error: ' . mysqli_connect_error($db));
        }
    }

}

?>


<!-- registration form -->
<section id="contact">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header mb-3 p-3">

                <div class="row">
                    <div class="col-md-12"><h3 class="text-primary fw-bold text-center">GCC Center</h3></div>


                    <div>

                        <form action="admin_dashboard.php" method="POST" class="float-end ms-2">
                            <button type="submit" name="logout_button" id="logout_button" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to logout?')">Logout
                            </button>

                        </form>

                        <form action="doctor.php" method="POST" class="float-start">
                            <button type="submit" name="back_button" id="back_button" class="btn btn-success btn-sm">Back</button>
                        </form>
<!--                        <form action="doctor.php" method="POST" class="float-start">-->
<!--                            <button type="submit" name="back_button" id="back_button" class="btn btn-success btn-sm">-->
<!--                                Back-->
<!--                            </button>-->
<!--                        </form>-->


                    </div>
                </div>

            </div>

            <div class="card-body">
                <h4 class="text-center">Doctor Edit Form</h4>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-6">




                        <form action="doctor_edit.php" method="POST" enctype="multipart/form-data">
                            <label for="name" class="form-label">Name:</label>
                            <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>

                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?> ">

                                <input type="text" class="form-control" name="name" id="name" placeholder="e.g. Mario"
                                       value="<?php echo $user_name; ?>" required="required">
                            </div>



                            <label for="dob" class="form-label mt-2">Date of Birth:</label>
                            <div class="input-group">
                        <span class="input-group-text date">
                            <i class="fa-solid fa-calendar-days"></i>
                        </span>
                                <input type="text" class="form-control" name="dob" id="datepicker"
                                       value="<?php echo $user_dob; ?>"
                                       placeholder="e.g.09/30/1953" required="required">

                            </div>



                            <label class="mt-2">Gender:</label>
                            <div class="input-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                    <?php if ($user_gender == 'male') echo 'checked = "checked"' ; ?>" />

                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                           value="female"
                                    <?php if ($user_gender == 'female') echo 'checked = "checked"' ; ?>" />
                                    <label class="form-check-label" for="female">
                                        Female </label>
                                </div>
                            </div>

                            <label for="nrc" class="form-label mt-4">NRC No:</label>
                            <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                                <input type="text" class="form-control" name="nrc" id="nrc" value="<?php echo $user_nrc; ?>"
                                       placeholder="e.g.12/LaMaNa(N)000000" required="required">
                            </div>



                            <div class="mt-2">
                                <label for="formFile" class="form-label">Image:</label>
                                <input class="form-control" name="image" type="file" id="formFile"
                                       accept=".jpg, .jpeg,.png" value="<?php echo $user_image; ?>" required="required">
                            </div>


                            <label for="qualification" class="form-label mt-2">Qualification:</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </span>
                                <input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo $user_qualification; ?>"
                                       placeholder="e.g. B.S.N (YGN)" required="required">
                            </div>

                            <label for="specialty" class="form-label mt-4">Specialty:</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-stethoscope"></i>
                                    </span>
                                <input type="text" class="form-control" name="specialty" id="specialty" value="<?php echo $user_specialty;?>"
                                       placeholder="e.g. Surgeon">
                            </div>




                            <label for="phone" class="form-label mt-2">Phone No:</label>
                            <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone-volume"></i>
                        </span>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       value="<?php echo $user_phone; ?>"
                                       placeholder="e.g. 09 000000000" required="required">
                            </div>



                            <label for="address" class="form-label mt-2">Address:</label>
                            <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                                <input type="text" class="form-control" name="address" id="address"
                                       value="<?php echo $user_address; ?>"
                                       placeholder="e.g. No(0), (A) Street, (0) Quarter, (A) Township, (A) City" required="required">
                            </div>



                            <label for="email" class="form-label mt-2">Email:</label>
                            <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                                <input type="text" class="form-control" name="email" id="email"
                                       value="<?php echo $user_email; ?>"
                                       placeholder="e.g. mario@example.com" required="required">
                            </div>


                            <label for="password" class="form-label mt-2">Password:</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                <input type="password" class="form-control" name="password" id="password"  value="<?php echo $user_password; ?>"
                                       placeholder="e.g. 123456" required="required">
                            </div>




                            <label for="confirm" class="form-label mt-2">Confirm Password:</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                <input type="password" class="form-control" name="confirm" id="confirm" value="<?php echo $user_confirm; ?>"
                                       placeholder="e.g. 123456" required="required">
                            </div>



                            <label for="role" class="form-label mt-2">Role:</label>
                            <div class="input-group mb-5">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-user-lock"></i>
                                    </span>
                                <select class="form-select" id="subject" name="role" >

                                    <option  value= "admin"
                                    <?php if ($user['role'] == 'admin') { ?> selected
                                        <?php } ?> >Admin<option>

                                    <option  value= "doctor"
                                        <?php if ($user['role'] == 'doctor') { ?> selected
                                        <?php } ?> >Doctor<option>

                                    <option  value= "nurse"
                                        <?php if ($user['role'] == 'nurse') { ?> selected
                                        <?php } ?> >Nurse<option>

                                </select>
                            </div>


                            <div class="mt-2 text-center">

                                <button type="submit" name="update_button" class="btn btn-primary">Update</button>


                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">

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


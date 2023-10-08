<?php
$db = mysqli_connect('localhost','root','','gcc_centre');

if(!$db){
    die("Error: ". mysqli_connect_error($db));
}

?>

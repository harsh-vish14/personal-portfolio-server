<?php
require 'check.php';
$NAME = $_GET['name'];
$EMAIL = $_GET['email'];
$MESSAGE = $_GET['message'];
$sql = "INSERT INTO `contact-form-data`(`NAME`,`EMAIL-ID`,`MESSAGE`) VALUES('$NAME','$EMAIL','$MESSAGE')";
if(!mysqli_query($con,$sql)){
    ?>
    <script>
        alert('no error');
    </script>
    <?php
}else{
    ?>
    <script>
        alert('error');
    </script>
    <?php
}
?>
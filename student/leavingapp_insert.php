<?php
/**
 * Created by PhpStorm.
 * User: solan
 * Date: 05-Feb-19
 * Time: 5:55 PM
 */

    require "include/Database.php";

    $db = new Database();

if (isset($_REQUEST['sbmt'])) {

    $title = $_REQUEST['title'];
    $description = $_REQUEST['desciption'];
    $reason = $_REQUEST['reason'];
    $days = $_REQUEST['days'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $enrollment = $_REQUEST['enrollment'];
    $mobile = $_REQUEST['mobile'];
    $semster = $_REQUEST['semster'];
    $department_id = $_REQUEST['department'];

    if ($title == "" || $description == "" || $reason == ""
        || $days == "" || $name == "" || $email == "" || $enrollment == "" || $mobile == "") {
        ?>
<script>
        alert("Please enter the details");
        window.location.href = "addleavingapplication.php";

</script>
<?php
    } else {

                $con=mysqli_connect("localhost","root","","onlineattendance");

        $insertRegistration = "INSERT INTO `leavningapp`( `title`, `description`, `reason`, `days`, `name`, `email`, `enrollment`, `mobile`, `semester`, `department_id`, `status`) VALUES ('$title','$description','$reason','$days','$name','$email','$enrollment','$mobile',$semster,$department_id,0)";
        
          $rowCount = mysqli_query($con,$insertRegistration);
        
        if ($rowCount > 0) {
            ?>
<script>
    alert("Added SuccessFully");
    window.location.href = "index.php";

</script>
<?php

        }
    }

} else {
    ?>
<script>
    window.location.href = "registration.php";

</script>
<?php
}

?>

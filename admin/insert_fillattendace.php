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

     $daylecture = $_REQUEST['daylecture'];
     $attendlecture = $_REQUEST['attendlecture'];
     $date = date('Y-m-d');
     $attendace = $_REQUEST['attendace'];
     $id = $_REQUEST['id'];
     $dep= $_REQUEST['dep'];
     $sem = $_REQUEST['sem'];
    
    if ($daylecture == "" || $attendlecture == "" ) {
        ?>
<script>
    alert("Please enter the details");
    window.location.href = "fillattendance.php";

</script>
<?php
    } else {

        $insertAttendance = "INSERT INTO `attendance`( `date`, `total_lecture`, `attend_lecture`, `attendance`, `student_id`, `semster`, `department_id`) VALUES (?,?,?,?,?,?,?)";

        // prepare and bind
        $stmt = $db->db_connect()->prepare($insertAttendance);
        $stmt->bind_param("ssssiii", $date, $daylecture, $attendlecture, $attendace, $id,$sem,$dep);


        $rowCount = $stmt->execute();


        if ($rowCount > 0) {
            ?>
<script>
    alert("Attendance Added SuccessFully");
    window.location.href = "addattendace.php";

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

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

    $name = $_REQUEST['name'];
    $semester = $_REQUEST['semester'];
    $department = $_REQUEST['department'];
   
    if ($name == "" ) {
        ?>
<script>
    alert("Please enter the details");
    window.location.href = "addfaculty.php";

</script>
<?php
    } else {

        $insertRegistration = "INSERT INTO `timetable`(`name`, `semster`, `department_id`) VALUES (?,?,?)";

        // prepare and bind
        $hod = 0;
        $stmt = $db->db_connect()->prepare($insertRegistration);
        $stmt->bind_param("sii", $name, $semester, $department);


        $rowCount = $stmt->execute();


        if ($rowCount > 0) {
            ?>
<script>
    alert(" Added SuccessFully");
    window.location.href = "viewtimetable.php";

</script>
<?php

        }
    }

} else {
    ?>
<script>
    window.location.href = "viewtimetable.php";

</script>
<?php
}

?>

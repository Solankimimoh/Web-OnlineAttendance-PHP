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
    $email = $_REQUEST['email'];
    $enrollment = $_REQUEST['enrollment'];
    $semester = $_REQUEST['semester'];
    $mobile = $_REQUEST['mobile'];
    $department_id = $_REQUEST['department'];

    if ($name == "" || $email == "" || $enrollment == ""
        || $mobile == "") {
        ?>
<script>
    alert("Please enter the details");
    window.location.href = "addfaculty.php";

</script>
<?php
    } else {

        $insertRegistration = "INSERT INTO `student`(`name`, `email`, `enrollment`, `mobile`, `semester`, `department_id`) VALUES (?,?,?,?,?,?)";

        // prepare and bind
        $hod = 0;
        $stmt = $db->db_connect()->prepare($insertRegistration);
        $stmt->bind_param("ssssii", $name, $email, $enrollment, $mobile,$semester, $department_id);


        $rowCount = $stmt->execute();


        if ($rowCount > 0) {
            ?>
<script>
    alert("Student Added SuccessFully");
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

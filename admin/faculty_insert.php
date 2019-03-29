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
    $password = $_REQUEST['password'];
    $mobile = $_REQUEST['mobile'];
    $department_id = $_REQUEST['department'];

    if ($name == "" || $email == "" || $password == ""
        || $mobile == "") {
        ?>
<script>
    alert("Please enter the details");
    window.location.href = "addfaculty.php";

</script>
<?php
    } else {

        $insertRegistration = "INSERT INTO `faculty`(`name`, `email`, `password`, `mobile`, `department_id`,`hod`) 
VALUES (?,?,?,?,?,?)";

        // prepare and bind
        $hod = 0;
        $stmt = $db->db_connect()->prepare($insertRegistration);
        $stmt->bind_param("sssssi", $name, $email, $password, $mobile, $department_id,$hod);


        $rowCount = $stmt->execute();


        if ($rowCount > 0) {
            ?>
<script>
    alert("Faculty Added SuccessFully");
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

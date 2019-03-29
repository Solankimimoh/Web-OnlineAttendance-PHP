   <?php require "include/session.php"; ?>

<?php

include("include/Database.php");
$db = new Database();

$id = $_GET['id'];
							
$deleteEvent =  "UPDATE `leavningapp` SET  `status`=1 WHERE `id`=$id";

$rowCount = mysqli_query($db->db_connect(),$deleteEvent);


if($rowCount > 0)
{
	header("Location: viewleavingapp.php");
}
else
{
	echo "Error Occured";
}

?>

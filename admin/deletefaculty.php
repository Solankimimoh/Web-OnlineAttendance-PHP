<?php

include("include/Database.php");
$db = new Database();

$id = $_GET['id'];
							
$deleteEvent =  "DELETE  FROM `faculty` WHERE `id`=$id";

$rowCount = mysqli_query($db->db_connect(),$deleteEvent);


if($rowCount > 0)
{
	header("Location: viewfaculty.php");
}
else
{
	echo "Error Occured";
}

?>

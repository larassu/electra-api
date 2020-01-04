<?php
// include database connection file
include_once("conn.php");

// Get id from URL to delete that user
$IDPel = $_GET['IDPel'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM pelanggan WHERE IDPel=$IDPel");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?><?php

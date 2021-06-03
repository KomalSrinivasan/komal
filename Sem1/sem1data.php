<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "u193491209_komal", "Komal@143");

// Check connection
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create database query execution
$sql = "CREATE DATABASE u193491209_gmrit_feedback";
if (mysqli_query($link, $sql))
{
    echo "Database created successfully";
	echo '<script type="text/javascript">
  swal({
  title: "DATABASE",
  text: "DATABASE created successfully!",
  icon: "success",
  button: "OK!",
});

</script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<?php


include '../conn.php';



$sql = "CREATE TABLE sem1(
	First_name VARCHAR(30) NOT NULL,
	Last_Name VARCHAR(30) NOT NULL,
	Jntu_No VARCHAR(30) NOT NULL,
	Year_of_Addmision INT(4) NOT NULL,
	Email_Id VARCHAR(30) NOT NULL,
	Mobile_No BIGINT(10) NOT NULL,
	Gender VARCHAR(10) NOT NULL,
	Semester INT(2) NOT NULL,
	ECS1_co1 INT(2) NOT NULL,ECS1_co2 INT(2) NOT NULL,ECS1_co3 INT(2) NOT NULL,ECS1_co4 INT(2) NOT NULL,ECS1_co5 INT(2) NOT NULL,ECS1_co6 INT(2) NOT NULL,
	EM1_co1 INT(2) NOT NULL,EM1_co2 INT(2) NOT NULL,EM1_co3 INT(2) NOT NULL,EM1_co4 INT(2) NOT NULL,EM1_co5 INT(2) NOT NULL,EM1_co6 INT(2) NOT NULL,
	EP_co1 INT(2) NOT NULL,EP_co2 INT(2) NOT NULL,EP_co3 INT(2) NOT NULL,EP_co4 INT(2) NOT NULL,EP_co5 INT(2) NOT NULL,EP_co6 INT(2) NOT NULL,
	EM_co1 INT(2) NOT NULL,EM_co2 INT(2) NOT NULL,EM_co3 INT(2) NOT NULL,EM_co4 INT(2) NOT NULL,EM_co5 INT(2) NOT NULL,EM_co6 INT(2) NOT NULL,
	PSC_co1 INT(2) NOT NULL,PSC_co2 INT(2) NOT NULL,PSC_co3 INT(2) NOT NULL,PSC_co4 INT(2) NOT NULL,PSC_co5 INT(2) NOT NULL,PSC_co6 INT(2) NOT NULL,
	EPL_co1 INT(2) NOT NULL,EPL_co2 INT(2) NOT NULL,EPL_co3 INT(2) NOT NULL,EPL_co4 INT(2) NOT NULL,EPL_co5 INT(2) NOT NULL,EPL_co6 INT(2) NOT NULL,
	PSCL_co1 INT(2) NOT NULL,PSCL_co2 INT(2) NOT NULL,PSCL_co3 INT(2) NOT NULL,PSCL_co4 INT(2) NOT NULL,PSCL_co5 INT(2) NOT NULL,PSCL_co6 INT(2) NOT NULL,
	ED_co1 INT(2) NOT NULL,ED_co2 INT(2) NOT NULL,ED_co3 INT(2) NOT NULL,ED_co4 INT(2) NOT NULL,ED_co5 INT(2) NOT NULL,ED_co6 INT(2) NOT NULL,
	IMAGE_LOCATION LONGTEXT NOT NULL
)";

$result = $conn->query($sql);

if ($result)
{
    echo "Table1 created successfully.";

//   echo '<script type="text/javascript">
//   swal({
//   title: "TABLE",
//   text: "Table created succeEPLfully!",
//   icon: "succeEPL",
//   button: "OK!",
// });

// </script>';
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($result);
}

?>

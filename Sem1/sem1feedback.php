<?php
include '../conn.php';
// Main Details
$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Jntuno = $_POST['jntuno'];
$Year = (int)$_POST['year'];
$Email = $_POST['email'];
$Mobile = (int)$_POST['phone_no'];
$Gender = $_POST['gender'];
$Sem = (int)$_POST['semester'];
// ENglish
$ECS1_co1 = (int)$_POST['ECS1_co1'];
$ECS1_co2 = (int)$_POST['ECS1_co2'];
$ECS1_co3 = (int)$_POST['ECS1_co3'];
$ECS1_co4 = (int)$_POST['ECS1_co4'];
$ECS1_co5 = (int)$_POST['ECS1_co5'];
$ECS1_co6 = (int)$_POST['ECS1_co6'];
// m1
$EM1_co1 = (int)$_POST['EM1_co1'];
$EM1_co2 = (int)$_POST['EM1_co2'];
$EM1_co3 = (int)$_POST['EM1_co3'];
$EM1_co4 = (int)$_POST['EM1_co4'];
$EM1_co5 = (int)$_POST['EM1_co5'];
$EM1_co6 = (int)$_POST['EM1_co6'];
// phy
$EP_co1 = (int)$_POST['EP_co1'];
$EP_co2 = (int)$_POST['EP_co2'];
$EP_co3 = (int)$_POST['EP_co3'];
$EP_co4 = (int)$_POST['EP_co4'];
$EP_co5 = (int)$_POST['EP_co5'];
$EP_co6 = (int)$_POST['EP_co6'];
// mechnacis
$EM_co1 = (int)$_POST['EM_co1'];
$EM_co2 = (int)$_POST['EM_co2'];
$EM_co3 = (int)$_POST['EM_co3'];
$EM_co4 = (int)$_POST['EM_co4'];
$EM_co5 = (int)$_POST['EM_co5'];
$EM_co6 = (int)$_POST['EM_co6'];
// c lang
$PSC_co1 = (int)$_POST['PSC_co1'];
$PSC_co2 = (int)$_POST['PSC_co2'];
$PSC_co3 = (int)$_POST['PSC_co3'];
$PSC_co4 = (int)$_POST['PSC_co4'];
$PSC_co5 = (int)$_POST['PSC_co5'];
$PSC_co6 = (int)$_POST['PSC_co6'];
// phy lab
$EPL_co1 = (int)$_POST['EPL_co1'];
$EPL_co2 = (int)$_POST['EPL_co2'];
$EPL_co3 = (int)$_POST['EPL_co3'];
$EPL_co4 = (int)$_POST['EPL_co4'];
$EPL_co5 = (int)$_POST['EPL_co5'];
$EPL_co6 = (int)$_POST['EPL_co6'];
// c lab
$PSCL_co1 = (int)$_POST['PSCL_co1'];
$PSCL_co2 = (int)$_POST['PSCL_co2'];
$PSCL_co3 = (int)$_POST['PSCL_co3'];
$PSCL_co4 = (int)$_POST['PSCL_co4'];
$PSCL_co5 = (int)$_POST['PSCL_co5'];
$PSCL_co6 = (int)$_POST['PSCL_co6'];
// Drawing
$ED_co1 = (int)$_POST['ED_co1'];
$ED_co2 = (int)$_POST['ED_co2'];
$ED_co3 = (int)$_POST['ED_co3'];
$ED_co4 = (int)$_POST['ED_co4'];
$ED_co5 = (int)$_POST['ED_co5'];
$ED_co6 = (int)$_POST['ED_co6'];

$prof=$_FILES['sign']['name'];

$prof_split=explode(".",$prof);
$img_name=$Jntuno.".".$prof_split[1];
$img_url="Sem1-sign/".$img_name;
$img_full_url="Sem1/".$img_url;

if($prof_split[1]!="jpg" && $prof_split[1]!='png' && $prof_split[1]!="jpeg" && $prof_split[1]!="" && $prof_split[1]!='PNG' && $prof_split[1]!='JPG' && $prof_split[1]!='JPEG'){
    echo "Bad image";
    exit();
}
elseif($Email=="" or $Jntuno==""){
    echo "invalid data";
    // echo jntuno;
    // echo email;
    
}
else{

        $sql = "INSERT INTO sem1 VALUES('$Fname','$Lname','$Jntuno','$Year','$Email','$Mobile','$Gender','$Sem',
                '$ECS1_co1','$ECS1_co2','$ECS1_co3','$ECS1_co4','$ECS1_co5','$ECS1_co6',
                '$EM1_co1','$EM1_co2','$EM1_co3','$EM1_co4','$EM1_co5','$EM1_co6',
                '$EP_co1','$EP_co2','$EP_co3','$EP_co4','$EP_co5','$EP_co6',
                '$EM_co1','$EM_co2','$EM_co3','$EM_co4','$EM_co5','$EM_co6',
                '$PSC_co1','$PSC_co2','$PSC_co3','$PSC_co4','$PSC_co5','$PSC_co6',
                '$EPL_co1','$EPL_co2','$EPL_co3','$EPL_co4','$EPL_co5','$EPL_co6',
                '$PSCL_co1','$PSCL_co2','$PSCL_co3','$PSCL_co4','$PSCL_co5','$PSCL_co6',
                '$ED_co1','$ED_co2','$ED_co3','$ED_co4','$ED_co5','$ED_co6',
                '$img_full_url')";
        
        $result = $conn->query($sql);
        if($result){
            if(move_uploaded_file($_FILES['sign']['tmp_name'],$img_url))
                    echo "inserted sucessfull";
    $url = "../popup/popup.html";
    header('Location:'.$url);
        }
        else{
            echo mysqli_error($result);
        }
}
?>

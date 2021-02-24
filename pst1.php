<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//January
$sql1 = "SELECT * FROM records WHERE reg_date BETWEEN '2019-12-26 00:00:00' AND '2020-01-25 23:59:59'";
$result1 = $link->query($sql1);
if ($result1->num_rows > 0) {
$Mech1= 0;
$Elect1= 0;
$Prod1= 0;
$Inpow1= 0;
$Expow1= 0;
while ($row = $result1->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech1 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect1 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod1 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow1 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow1 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical120'=>$Mech1, 'Electrical120'=>$Elect1, 'Production120'=>$Prod1, 'Inpower120'=>$Inpow1, 'Expower120'=>$Expow1));
}
mysqli_close($link);
?>

 


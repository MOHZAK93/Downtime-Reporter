<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql6 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-05-26 00:00:00' AND '2020-06-25 23:59:59'";
$result6 = $link->query($sql6);
if ($result6->num_rows > 0) {
$Mech6= 0;
$Elect6= 0;
$Prod6= 0;
$Inpow6= 0;
$Expow6= 0;
while ($row = $result6->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech6 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect6 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod6 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow6 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow6 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical620'=>$Mech6, 'Electrical620'=>$Elect6, 'Production620'=>$Prod6, 'Inpower620'=>$Inpow6, 'Expower620'=>$Expow6));
}
mysqli_close($link);
?>
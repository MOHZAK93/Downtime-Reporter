<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql7 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-06-26 00:00:00' AND '2020-07-25 23:59:59'";
$result7 = $link->query($sql7);
if ($result7->num_rows > 0) {
$Mech7= 0;
$Elect7= 0;
$Prod7= 0;
$Inpow7= 0;
$Expow7= 0;
while ($row = $result7->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech6 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect7 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod7 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow7 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow7 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical720'=>$Mech7, 'Electrical720'=>$Elect7, 'Production720'=>$Prod7, 'Inpower720'=>$Inpow7, 'Expower720'=>$Expow7));
}
mysqli_close($link);
?>
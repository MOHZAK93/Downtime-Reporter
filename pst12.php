<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql12 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-11-26 00:00:00' AND '2020-12-25 23:59:59'";
$result12 = $link->query($sql12);
if ($result12->num_rows > 0) {
$Mech12= 0;
$Elect12= 0;
$Prod12= 0;
$Inpow12= 0;
$Expow12= 0;
while ($row = $result12->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech12 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect12 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod12 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow12 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow12 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical1220'=>$Mech12, 'Electrical1220'=>$Elect12, 'Production1220'=>$Prod12, 'Inpower1220'=>$Inpow12, 'Expower1220'=>$Expow12));
}
mysqli_close($link);
?>
<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql5 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-04-26 00:00:00' AND '2020-05-25 23:59:59'";
$result5 = $link->query($sql5);
if ($result5->num_rows > 0) {
$Mech5= 0;
$Elect5= 0;
$Prod5= 0;
$Inpow5= 0;
$Expow5= 0;
while ($row = $result5->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech5 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect5 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod5 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow5 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow5 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical520'=>$Mech5, 'Electrical520'=>$Elect5, 'Production520'=>$Prod5, 'Inpower520'=>$Inpow5, 'Expower520'=>$Expow5));
}
mysqli_close($link);
?>
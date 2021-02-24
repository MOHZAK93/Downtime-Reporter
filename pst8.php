<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql8 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-07-26 00:00:00' AND '2020-08-25 23:59:59'";
$result8 = $link->query($sql8);
if ($result8->num_rows > 0) {
$Mech8= 0;
$Elect8= 0;
$Prod8= 0;
$Inpow8= 0;
$Expow8= 0;
while ($row = $result8->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech8 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect8 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod8 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow8 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow8 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical820'=>$Mech8, 'Electrical820'=>$Elect8, 'Production820'=>$Prod8, 'Inpower820'=>$Inpow8, 'Expower820'=>$Expow8));
}
mysqli_close($link);
?>
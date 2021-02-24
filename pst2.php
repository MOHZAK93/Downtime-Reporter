<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql2 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-01-26 00:00:00' AND '2020-02-25 23:59:59'";
$result2 = $link->query($sql2);
if ($result2->num_rows > 0) {
$Mech2= 0;
$Elect2= 0;
$Prod2= 0;
$Inpow2= 0;
$Expow2= 0;
while ($row = $result2->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech2 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect2 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod2 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow2 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow2 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical220'=>$Mech2, 'Electrical220'=>$Elect2, 'Production220'=>$Prod2, 'Inpower220'=>$Inpow2, 'Expower220'=>$Expow2));
}
mysqli_close($link);
?>
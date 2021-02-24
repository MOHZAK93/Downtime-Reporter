<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql10 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-09-26 00:00:00' AND '2020-10-25 23:59:59'";
$result10 = $link->query($sql10);
if ($result10->num_rows > 0) {
$Mech10= 0;
$Elect10= 0;
$Prod10= 0;
$Inpow10= 0;
$Expow10= 0;
while ($row = $result10->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech10 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect10 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod10 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow10 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow10 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical1020'=>$Mech10, 'Electrical1020'=>$Elect10, 'Production1020'=>$Prod10, 'Inpower1020'=>$Inpow10, 'Expower1020'=>$Expow10));
}
mysqli_close($link);
?>
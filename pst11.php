<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql11 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-10-26 00:00:00' AND '2020-11-25 23:59:59'";
$result11 = $link->query($sql11);
if ($result11->num_rows > 0) {
$Mech11= 0;
$Elect11= 0;
$Prod11= 0;
$Inpow11= 0;
$Expow11= 0;
while ($row = $result11->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech11 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect11 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod11 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow11 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow11 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical1120'=>$Mech11, 'Electrical1120'=>$Elect11, 'Production1120'=>$Prod11, 'Inpower1120'=>$Inpow11, 'Expower1120'=>$Expow11));
}
mysqli_close($link);
?>
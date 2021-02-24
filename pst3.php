<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql3 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-02-26 00:00:00' AND '2020-03-25 23:59:59'";
$result3 = $link->query($sql3);
if ($result3->num_rows > 0) {
$Mech3= 0;
$Elect3= 0;
$Prod3= 0;
$Inpow3= 0;
$Expow3= 0;
while ($row = $result3->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech3 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect3 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod3 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow3 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow3 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical320'=>$Mech3, 'Electrical320'=>$Elect3, 'Production320'=>$Prod3, 'Inpower320'=>$Inpow3, 'Expower320'=>$Expow3));
}
mysqli_close($link);
?>
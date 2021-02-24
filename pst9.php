<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql9 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-08-26 00:00:00' AND '2020-09-25 23:59:59'";
$result9 = $link->query($sql9);
if ($result9->num_rows > 0) {
$Mech9= 0;
$Elect9= 0;
$Prod9= 0;
$Inpow9= 0;
$Expow9= 0;
while ($row = $result9->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech9 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect9 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod9 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow9 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow9 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical920'=>$Mech9, 'Electrical920'=>$Elect9, 'Production920'=>$Prod9, 'Inpower920'=>$Inpow9, 'Expower920'=>$Expow9));
}
mysqli_close($link);
?>
<?php
 include "connect.php";
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//February
$sql4 = "SELECT * FROM records WHERE reg_date BETWEEN '2020-03-26 00:00:00' AND '2020-04-25 23:59:59'";
$result4 = $link->query($sql4);
if ($result4->num_rows > 0) {
$Mech4= 0;
$Elect4= 0;
$Prod4= 0;
$Inpow4= 0;
$Expow4= 0;
while ($row = $result4->fetch_assoc()) {
    if($row['category']=="mechanical"){
    $Mech4 += $row['duration'];
    }
    if($row['category']=="electrical"){
    $Elect4 += $row['duration'];
    }
    if($row['category']=="production"){
    $Prod4 += $row['duration'];
    }
    if($row['category']=="internal power"){
    $Inpow4 += $row['duration'];
    }
    if($row['category']=="external power"){
    $Expow4 += $row['duration'];
    }
  }
 echo json_encode( array('Mechanical420'=>$Mech4, 'Electrical420'=>$Elect4, 'Production420'=>$Prod4, 'Inpower420'=>$Inpow4, 'Expower420'=>$Expow4));
}
mysqli_close($link);
?>
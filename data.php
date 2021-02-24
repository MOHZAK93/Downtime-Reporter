<?php
 include "connect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $role = $_POST['role'];
        $nest = $_POST['nest'];
        $comments= $_POST['comments'];
        
        $sql = "INSERT INTO records(name, role, nest, comments)
        VALUES('$name','$role','$nest','$comments')";	
        
    if(mysqli_query($link,$sql)){
            $last_id = $link->insert_id;
            echo json_encode(['id'=>$last_id]);
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
        mysqli_close($link);
?>
 
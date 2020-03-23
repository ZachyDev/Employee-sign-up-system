<?php
    require_once('conn.php');

    $query = "DELETE FROM `employee_sign` WHERE `Username` = 'rodgers ndocha';";
    if(mysqli_query($conn,$query)){
        echo "deleted";
    }else{
        echo "delete failed";
    }
?>
<?php
    require_once('conn.php');
    $query = "UPDATE `employee_sign` SET `Username` = 'rodgers ndocha' WHERE `Username` = 'rodgers makori';";

    if(mysqli_query($conn,$query)){
        echo "update success";
    }else{
        echo "update fail";
    }
?>
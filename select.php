<?php
    require_once('conn.php');
    $query = "SELECT * FROM `employee_sign`;";
    if($result = mysqli_query($conn,$query)){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['Username'] . " " . $row['Job Number'] . $row['Department'] . " " . $row['Gender'] . " " .  $row['Age'] . " ". $row['Password'] . " " . "<br>";
        }
    }
    mysqli_close($conn);
?>
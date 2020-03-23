<?php
    require_once('conn.php');
    // get the form inputs
    $username = $_POST['user'];
    $job_no = $_POST['job_no'];
    $dept = $_POST['dept'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $pass= md5($_POST['pass']);
    $query = "INSERT INTO `employee_sign` (`Username`,`Job Number`,`Department`,`Gender`,`Age`,`Password`) 
        VALUES('$username','$job_no','$dept','$gender','$age','$pass');";

        // check if entry is successful
        if(mysqli_query($conn,$query)){
            echo "Registration successful!";
        }else{
            echo "something went wrong!";
        }
        mysqli_close($conn);
?>
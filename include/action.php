<?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $company=$_POST['company'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $country=$_POST['country'];
        $position=$_POST['position'];

        $query = "insert into user(`f_name`,`l_name`,`company`,`mobile`,`email`,`password`,`country`,`position`) VALUES('$f_name','$l_name','$company','$mobile','$email','$password','$country','$position')";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            echo '<script> alert("data saved"); </script>';
            header('Location:index.php');
        }
        else
        {
            echo '<script> alert("data not saved"); </script>';

        }    

    }

?>
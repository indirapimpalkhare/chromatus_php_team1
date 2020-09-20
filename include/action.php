<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "chromatus_db");
if(!empty($_POST))
{
 
 $f_name = mysqli_real_escape_string($connect, $_POST["f_name"]);  
 $l_name = mysqli_real_escape_string($connect, $_POST["l_name"]);  
 $company = mysqli_real_escape_string($connect, $_POST["company"]);  
 $number = mysqli_real_escape_string($connect, $_POST["number"]);  
 $email = mysqli_real_escape_string($connect, $_POST["email"]);  
 $password = mysqli_real_escape_string($connect, $_POST["password"]);  
 $country = mysqli_real_escape_string($connect, $_POST["country"]);  
 $position = mysqli_real_escape_string($connect, $_POST["position"]);  
    
    $query = "
    INSERT INTO employee(f_name,l_name,company,number,email,password,country,position)  
     VALUES('$f_name', '$l_name', '$company', '$number', '$email','$password','$country','$position')
    ";
    
}
?>
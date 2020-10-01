<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$server = "localhost";
$user = "root";
$password = "";
$db = "db_chromatus";

/* Attempt to connect to MySQL database */
$con = mysqli_connect( $server, $user, $password, $db);
 
// Check connection
if($con){
	?>
	<script>
	alert("Connection Successful");
	</script>
	<?php
}else{
	?>
	<script>
	alert(" No Connection");
	</script>
	<?php
}
?>

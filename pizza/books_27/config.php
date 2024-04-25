<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "bookstore_db";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
?>
<script>
alert("Connection Succesfull");
</script>
<?php
}else{
?>
<script>
alert("No Connection");
</script>
<?php
}
?>
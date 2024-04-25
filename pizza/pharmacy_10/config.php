<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "pharmacy";

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
<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "clg_exam";

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
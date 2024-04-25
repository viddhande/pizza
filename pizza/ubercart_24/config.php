<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "ecommerce";

$conn = mysqli_connect($server,$user,$password,$db);

if($conn){
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
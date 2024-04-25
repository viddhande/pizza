<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>26</title>
<?php include 'css/style.php' ?>
<?php include 'links/links.php' ?>
</head>
<body>

<?php

include 'dbcon.php' ; 

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "SELECT * FROM registration WHERE email='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0) {
?>
            <script>alert("Email already registered");</script>
<?php
        }
else {
        if($password === $cpassword) {
            $insertquery = "INSERT INTO registration (username, email, mobile, password, cpassword) VALUES ('$username', '$email', '$mobile', '$pass' ,'$cpass')";
            $iquery = mysqli_query($con, $insertquery);

            if($iquery) {
?>
                <script>alert("Registration Successful");</script>
<?php
                echo "<script>location.replace('/signup/login.php');</script>";
                exit();
            } else {
?>
                <script>alert("Registration failed");</script>
<?php
            }
        } else {
?>
            <script>alert("Password not matching");</script>
<?php
        }
    }
}
?>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
<h4 class="card-title mt-3 text-center">Create Account</h4>
<p class="text-center">Get started with your free account</p>
<p>
<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>
Login via Gmail</a>
<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i>
Login via Facebook</a>
</p>
<p class="divider-text">
<span class="bg-light">OR</span>
</p>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-user"></i></span>
</div>
<input name="username" autocomplete="off" class="form-control" placeholder="Full name" type="text" required>
</div>

<div class="form-group input-group">
<div class="form-group-prepend">
<span class="input-group-text"> <i class="fa fa-envelope"> </i> </span>
</div>
<input name="email" autocomplete="off" class="form-control" placeholder="Email address" type="email" required>
</div>


<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-phone"></i></span>
</div>
<input name="mobile" autocomplete="off" class="form-control" placeholder="Phone number" type="number" required>
</div>

<div class="form-group input-group">
<div class="form-group-prepend">
<span class="input-group-text"> <i class="fa fa-lock"> </i> </span>
</div>
<input class="form-control" placeholder="Create password" type="password"  name="password" value="" required>
</div>

<div class="form-group input-group">
<div class="form-group-prepend">
<span class="input-group-text"> <i class="fa fa-lock"> </i> </span>
</div>
<input class="form-control" placeholder="Repeat password" type="password"  name="cpassword" value="" required>
</div>

<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account </button>
</div>

<p class="text-centre"> Have an account ? <a href="/signup/login.php"> Log In </a>  </p>
</form>
</article>
</div>

</body>
</html>

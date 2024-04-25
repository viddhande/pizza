<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'css/style.php' ?>
<?php include 'links/links.php' ?>
</head>
<body>

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "SELECT * FROM registration WHERE email='$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];
        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode) {
            ?>
            <script>
                alert("Login successful");
                location.replace("/signup/home.php");
            </script>
            <?php
            exit(); // Make sure to exit after redirection
        } else {
            ?>
            <script>alert("Password incorrect");</script>
            <?php
        }
    } else {
        ?>
        <script>alert("Invalid Email");</script>
        <?php
    }
}
?>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
<h4 class="card-title mt-3 text-center">Create Account</h4>
<p class="text-center">Get started with your free account</p>
<p>
<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i> Login via Gmail</a>
<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i> Login via Facebook</a>
</p>
<p class="divider-text">
<span class="bg-light">OR</span>
</p>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-user"></i> </span>
</div> 
<input name="email" class="form-control" placeholder="Email" type="email"> 
</div>
<div class="form-group input-group"> 
<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
</div>
<input class="form-control" placeholder="Password" type="password" name="password" value="">
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block"> Login Now </button>
</div>
<p class="text-center">Don't have an account? <a href="/signup/regis.php">Signup here</a> </p>
</form>
</article>
</div>
</body>
</html>

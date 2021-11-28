<?php
   ob_start();
   session_start();
   if (isset($_COOKIE['user'])) {
    unset($_COOKIE['user']); 
    setcookie('user', null, -1, '/'); 
    }
   if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   {
   if (!empty($_POST['Username']) 
      && !empty($_POST['Password'])) {

      if ($_POST['Username'] == 'admin' && $_POST['Password'] == '123') {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'tutorialspoint';
         setcookie('user', 'malluu', time() + (86400 * 30), "/"); // 86400 = 1 day
         echo "<script> location.href='dashboard.php'; </script>";
         exit;
      }else {
         echo "<script> alert('Wrong username or password');</script>";
      }
   }
   else{
    $_SESSION = array();
   }
}

?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">


    <form action="index.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" id="Username" name="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" id= "Password"  name="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
</body>
<script>
  $(document).ready(function(){
    // alert('hi');
  });
</script>
</html>

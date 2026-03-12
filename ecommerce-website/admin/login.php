<?php
session_start();

if(isset($_POST['login'])){

$user=$_POST['username'];
$pass=$_POST['password'];

if($user=="admin" && $pass=="admin123"){

$_SESSION['admin']=true;
header("Location:index.php");

}else{

$error="Invalid login";

}

}
?>

<form method="post">
<h2>Admin Login</h2>

<input type="text" name="username" placeholder="Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="login">Login</button>

<?php if(isset($error)) echo $error; ?>

</form>
<?php
$con=mysqli_connect("localhost", "root", "", "lms_db");
$user = $_POST['uname'];
$pass = $_POST['pw'];

$sql = "SELECT * FROM users WHERE user_name='$user' && password='$pass'";
$sql_result = mysqli_query($con, $sql);

if($sql_data=mysqli_fetch_array($sql_result)){
	if($sql_data['user_name']==$user && $sql_data['password']==$pass){
		header("location:dashboard.php");
	}else{
		$message="User Name or Password is incorrect";
	}
}else{
	$message="User Name or Password is incorrect";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LMS Login</title>

<link type="text/css" rel="stylesheet" href="css/nav.css">

</head>

<body>
	<nav class="menu">
    	<ul>
        	<a class="active" href="index.html"><li>Home</li></a>
            <a href="#"><li>About</li></a>
            <a href="#"><li>Help</li></a>
            <a href="#"><li>Contact</li></a>
            <a href="#"><li class="dropdown">Register</a>
           	  <ul class="dropdown-content">
                	<a href="#"><li>Sign up</li></a>
                    <a href="#"><li>Login</li></a>
              </ul>
            </li>
            <div class="clear"></div>
        </ul>
  	</nav>
    
    <?php
		echo $message;
	?>
    
</body>
</html>
<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","login");
	
	if($conn)
	{
		echo "";
	}
	
	else
	{
		die("connection failed".mysqli_connect_error());
	}
?>

<form action="" method="post">
	Username : <input type="text" name="username" value=""/><br/><br/>
	Password : <input type="password" name="password" value=""/><br/><br/>
	<input type="submit" value="Log In" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pwd= $_POST['password'];
	
	$query="SELECT * from user where username='$user' && password='$pwd'";
	$data = mysqli_query($conn,$query);
	
	$total= mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:CreateBlog.php');
	}
	
	else
	{
		echo "Log in failed";
	}
}
?>
<?php
	session_start();
	$user1=$_SESSION['user_name'];

	$link=mysqli_connect("localhost","root","","login");
	if($link==false)
		die ("Could not connect".mysqli_connect_error());
	
	$sql="Select title from blog where user='$user1'";
	$data=mysqli_query($link,$sql);
	$total= mysqli_num_rows($data);
	
	//$result=mysqli_fetch_assoc($data);
	//echo "User : ".$user1." Blog Title : ".$result['title'];

	while($result=mysqli_fetch_assoc($data))
	{
		echo "User : ".$user1." Blog Title : ".$result['title']."<br/>";
	}
?>

<form action="logout.php">
		<input type="submit" value="Log Out">
</form>
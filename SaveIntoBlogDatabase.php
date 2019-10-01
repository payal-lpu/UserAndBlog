<?php
	$title=$_POST['blogTitle'];
	$content=$_POST['blogContent'];
	$data=$_POST['blogData'];
	$by=$_POST['blogBy'];
	
	$link=mysqli_connect("localhost","root","","login");
	
	if($link==false)
	{
		die("could not connect".mysqli_connect_error());
	}
	
	$sql="insert into blog values('$_POST[blogTitle]','$_POST[blogContent]','$_POST[blogData]','$_POST[blogBy]')";
	
	if(mysqli_query($link,$sql))
	{
		echo "Inserted Successfully";
		header('location:BlogList.php');
	}
	
	else
	{
		echo "Error while inserting";
	}
?>
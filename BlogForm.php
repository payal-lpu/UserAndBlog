<!DOCTYPE html>
<html>
	<head>
		<title>Blog form</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<form action="SaveIntoBlogDatabase.php" method="POST">
			Blog title : <input type="text" name="blogTitle"><br/><br/>
			blog content : <input type="text" name="blogContent"><br/><br/>
			submitted data : <input type="text" name="blogData"><br/><br/>
			submitted by : <input type="text" name="blogBy"><br/><br/>
			<input type="submit" value="submit">
		</form>
	</body>
</html>
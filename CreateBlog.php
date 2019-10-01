<?php
	session_start();
	echo "Welcome ".$_SESSION['user_name'];
?>
<form action="BlogForm.php">
	<input type="submit" value="Create Blog">
</form>
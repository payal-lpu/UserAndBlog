<?php
	$myFile=fopen("FileHandling.txt","r");
	while(!feof($myFile))
	{
		echo fgets($myFile)."<br/>";
	}
?>
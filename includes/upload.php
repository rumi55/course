<?php


session_start();

if( $_SESSION['level'] == 1 )
{
echo "Upload: " . $_FILES["file"]["name"] . "<br />";
echo "Type: " . $_FILES["file"]["type"] . "<br />";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	if (file_exists("upload/" . $_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"] . " already exists. ";
	}
	else {
		move_uploaded_file($_FILES["file"]["tmp_name"],
		"./upload/" . $_FILES["file"]["name"]);
		echo "Stored in: " . "./upload/" . $_FILES["file"]["name"];
	}
}
else {
header("Location:'http://iiitcslcentral.co.cc/'");
}

?>
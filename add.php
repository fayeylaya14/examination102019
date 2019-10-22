<?php
	include("conn.php");
	$sql = "INSERT INTO posts (title, content, created_at) VALUES ('".$_POST["title"]."','".$_POST["content"]."', now())";
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	    header("Location: bulletinboard.php");
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
<?php
include("conn.php");
?>
<!DOCTYPE html>
<head>
	<title>Back-End Programming | Exam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<body>
	<div class="left" style="float: left;">
		<h3>Bulletin Board</h3>
		<form action="add.php" class="bull" name="bulletinboard" method="post">
			Title: 
			<input type="text" name="title"/>
			Content: 
			<input type="text" name="content"/>
			<input type="submit">
		</form>
	</div>
	<div class="right" style="float: left">
		<ul>
		<?php
			$sql = "SELECT * FROM posts ORDER BY created_at DESC";
			$query = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($query)){
				echo "<li>";
				echo "<span>" .$row["bulID"]. "</span>";
				echo "<br>";
				echo "<span>" .$row["title"]. "</span>";
				echo "<br>";
				echo "<span>" .$row["content"]. "</span>";
				echo "<li>";
			}
		?>
		</ul>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>mustang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<h1>mustang</h1>
	<div id="gallery">
		<?php
			$dir = "photos/";
			$files = scandir($dir);
			foreach ($files as $file) {
				if ($file != "." && $file != "..") {
					echo "<a href=\"$dir$file\" data-lightbox=\"gallery\"><img src=\"thumbnail.php?file=$dir$file\"></a>";
				}
			}
		?>
	</div>
</body>
</html>

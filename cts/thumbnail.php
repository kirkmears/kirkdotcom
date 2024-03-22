<?php
	$file = $_GET['file'];
	$thumbnail_width = 200;

	if (file_exists($file)) {
		$image_info = getimagesize($file);
		$image_width = $image_info[0];
		$image_height = $image_info[1];
		$aspect_ratio = $image_width / $image_height;
		$thumbnail_height = round($thumbnail_width / $aspect_ratio);

		$source_image = imagecreatefromjpeg($file);
		$thumbnail_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
		imagecopyresized($thumbnail_image, $source_image, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $image_width, $image_height);

		header('Content-Type: image/jpeg');
		imagejpeg($thumbnail_image);
		imagedestroy($source_image);
		imagedestroy($thumbnail_image);
	}
?>
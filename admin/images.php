<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Images</title>
	</head>
<body>
<p>Click on an image to view it in a separate window.</p>
<ul>
<?php # Script 11.4 - images.php
// This script lists the images in the uploads directory.

$dir = '../images/cupcakes'; // Define the directory to view.

$files = scandir($dir); // Read all the images into an array.

// Display each image caption as a link to the JavaScript function:
foreach ($files as $image) {

	if (substr($image, 0, 1) != '.') { // Ignore anything starting with a period.
	
		// Get the image's size in pixels:
		$image_size = getimagesize ("$dir/$image");

		// Make the image's name URL-safe:
		$image_name = urlencode($image);
		
		// Print the information:
		echo "<li><a href=\"show_image.php?image=".$image."\">".$image."</a></li>\n";
		
	
	} // End of the IF.
    
} // End of the foreach loop.
?>
</ul>
</body>
</html>
<?php

$file = "example.txt";

// w for write, r for delete
if ($handle = fopen($file, 'r')) {
	echo $content = fread($handle, filesize($file));

	fclose($handle);
} else{
	echo "The application was not able to write on the file";
}

// unlink function to delete

?>
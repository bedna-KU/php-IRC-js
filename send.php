<?php
//#########################################################
// Part of project php-IRC-js
//
// xhr_write.php - write command to file "send"
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

// Get data from JavaScript
$text = rawurldecode ($_SERVER['HTTP_X_TEXT']);

// Name must be set
if (!isset ($text)) {
  echo 'ERROR: Name required';
}

// If file open
if ($handle = fopen ("send", "w")) {
	// Write command to file
	fwrite ($handle, $text);
	fclose ($handle);
	// Send data back to JavaScript
	echo $text;
	flush ();
}
// If error
else {
	echo "ERROR open file 'send'";
}
?>

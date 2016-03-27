<?php
//#########################################################
// Part of project php-IRC-js
//
// connect.php - connect to server and send commands
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

// Define viarable
$response = "";

// Open file for read responses
if ($handle = @fopen ("server_response.txt", "r")) {
	// Reads lines from file
	while ($line = fgets ($handle)) {
		$response .= $line;
	}
	// Close file
	fclose ($handle);
	// Send lines back to JavaScript
	echo $response;
	flush ();
}
// If error
else {
	echo "ERROR open file 'server_response.txt'";
	flush ();
}
?>

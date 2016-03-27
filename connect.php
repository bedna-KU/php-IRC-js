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

// Settings
$ircServer = "irc.freenode.net";
$ircPort = "6667";
$ircChannel = "#KERNEL_ULTRAS";

// Set variables
$loop = "loop";

// Set unlimite execution time
set_time_limit(0);

// Connect to server
$ircSocket = pfsockopen ($ircServer, $ircPort, $eN, $eS);

// If socket open
if ($ircSocket) {
	// Login bot
	fwrite ($ircSocket, "USER KU-bot127c 0 lol :Kubo137c\r\n");
	fwrite ($ircSocket, "NICK KU-bot137c\r\n");
	// Join to channel
	fwrite ($ircSocket, "JOIN " . $ircChannel . "\r\n");
	// Send message to channel
	fwrite ($ircSocket, "PRIVMSG #KERNEL_ULTRAS :Im here\r\n");
	// Open file "server_response.txt" for write
	$handle = fopen ("server_response.txt", "w");
	// Open file for logs
	$handle_log = fopen ("log.txt", "w");
	// Write log
	fwrite ($handle_log, "FIRST\n");

	while (1) {
		// Write log
		fwrite ($handle_log, "MAIN\n");
		// Read command from file "send"
		if (file_exists ("send")) {
			// Read command
			$command = file_get_contents ("send");
			// Remove file
			unlink ("send");
			// Timeout "for sure"
			sleep (1);
			// Write command to socket
			fwrite ($ircSocket, "$command"."\r\n");
			// Flush command to socket
			flush ();
			// Write log
			fwrite ($handle_log, "SEND :$command\n");
		}
		// If IRC server send message to client
		while ($data = fgets ($ircSocket, 128)) {
			// fwrite ($handle_log, "DATA :".$data."\n");
			fwrite ($handle_log, "READ\n");
			// Separate all data by space
			$exData = explode (' ', $data);
			// Send PONG back to the server
			if ($exData[0] == "PING") {
				// Write log
				fwrite ($handle_log, "PING :".$exData[1]."\n");
				// Write PONG to server
				fwrite ($ircSocket, "PONG ".$exData[1]."\r\n");
			}
			// If response other than PING
			else {
				// Write response to file "server_response.txt"
				fwrite ($handle, nl2br ($data));
			}
		}
	}
}
// If error on connection
else {
    echo $eS . ": " . $eN;
}
?>

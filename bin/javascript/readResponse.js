//#########################################################
// Part of project php-IRC-js
//
// xhr_write.php - Read responses
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

// Write data on server
function readResponse () {
	// Create new XHR
	var xhr = new XMLHttpRequest(); // New XHR2
	// If "read_response.php" send data back
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("status").innerHTML = "&gt;&gt;&gt;" + xhr.responseText + "</b><br>";
		}
	};

	// Send data to server
	xhr.open ("GET", "read_response.php", true); // Sync open file
	xhr.responseType = 'text';
	xhr.setRequestHeader ("Content-Type", "application/octet-stream");
	xhr.setRequestHeader ("X-TEXT", message); // Custom header - file name
	xhr.send (); // Send
};

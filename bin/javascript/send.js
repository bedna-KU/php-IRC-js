//#########################################################
// Part of project php-IRC-js
//
// xhr_write.php - Read response
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

// Write data on server
function send () {
	// New XHR2 request
	var xhr = new XMLHttpRequest(); // New XHR2
	message = encodeURIComponent (document.getElementById("message").value);

	console.log ('message :' + message);

	if (message) {
		// Send data to server
		xhr.open ("GET", "send.php", true); // Sync open file
		xhr.responseType = 'text';
		xhr.setRequestHeader ("Content-Type", "application/octet-stream");
		xhr.setRequestHeader ("X-TEXT", message); // Custom header - file name
		xhr.send (); // Send
	}
	// If mesage is empty
	else {
		alert ("Message is empty");
	}
};

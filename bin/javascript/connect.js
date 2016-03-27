//#########################################################
// Part of project php-IRC-js
//
// xhr_write.php - connect to server
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

// Connect to server
function connect () {
	// Create new XHR
    var xhr = new XMLHttpRequest ();
    // If "connect.php" send data back
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("status").innerHTML += "@@@" + xhr.responseText + "</b><br>";
		}
	};
    
    xhr.open ("GET","connect.php", true);
    xhr.send ();
}

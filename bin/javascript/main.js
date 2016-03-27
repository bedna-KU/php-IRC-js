//#########################################################
// Part of project php-IRC-js
//
// xhr_write.php - main.js
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

// Read rsponse and sroll page down by timeout
function main () {
	readResponse ();
	document.getElementById("bottom").scrollIntoView();
	setTimeout (main, 1000);
}

// Scroll page down
function scrollIntoView(eleID) {
   var e = document.getElementById(eleID);
   if (!!e && e.scrollIntoView) {
       e.scrollIntoView();
   }
}

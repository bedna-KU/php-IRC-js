<?php
//#########################################################
// Part of project php-IRC-js
//
// index.php - main file
//
// Author: Mario Chorvath - Bedna
// Start 2016
//
// Licence GNU General Public License
// Version 2
// http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
//#########################################################

echo "
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
		<meta name='author' content='Mario Chorvath - Bedňa' >
		<meta name='company' content='KERNEL ULTRAS'>
		<meta name='date' content='(D.M.Y) 31.03.2016'>
		<meta name='robots' content='index,follow'>
		<meta name='description' content='IRC client in PHP'>
		<meta name='keywords' content='Linux,FSF,Free Software,Open Source,Android,Programing,Programovanie'>
		<script type='text/javascript' src='bin/javascript/connect.js'></script>
		<script type='text/javascript' src='bin/javascript/send.js'></script>
		<script type='text/javascript' src='bin/javascript/readResponse.js'></script>
		<script type='text/javascript' src='bin/javascript/main.js'></script>
	</head>
";

echo "
	<body onload=\"main()\">
		<p><b>STATUS:</b></p>
		<p id=\"status\"></p>
		<form name=\"form_connect\" action=\"javascript:connect()\">
			<input type=\"submit\" name=\"connect\" value=\"Connect\">
		</form>
		<form name=\"formSend\" action=\"javascript:send()\">
			<input type=\"text\" id=\"message\" name=\"message\">
			<input type=\"submit\" name=\"submit\" value=\"Submit\">
		</form>
		<div id=\"bottom\">-----------------------------------------------------</div>
	</body>
</html>
";
?>

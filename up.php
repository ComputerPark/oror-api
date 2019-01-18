<?php
function getApiStatus($host, $name, $protocol, $port, $row) {
	if ($socket = @ fsockopen($host, $port, $errno, $errstr, 2)) {
		echo "<th scope=\"row\">". $row. "</th><td><a href=\"".$protocol."://" . $host . "\">" . $name . "</a>" . "</td><td><span class=\"badge badge-success\"><i class=\"fas fa-check\"></i> Online</span></td>";
		fclose($socket);
	} else {
		echo "<th scope=\"row\">". $row. "</th><td><a href=\"".$protocol."://" . $host . "\">" . $name . "</a>" . "</td><td><span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i> Offline</span></td>";
	}
}
function test($row){
    echo "<th scope=\"row\">". $row. "</th><td><a href=\"ftp://home.oror.kr\">컴터박 FTP</a></td><td><span class=\"badge badge-success\"><i class=\"fas fa-check\"></i> Online</span></td>";
}
//get_api_status_new($_GET["host"], $_GET["name"], $_GET["protocol"], $_GET["port"]);
getApiStatus($_GET["host"], $_GET["name"], $_GET["protocol"], $_GET["port"],$_GET["row"]);
//test($_GET["row"]);
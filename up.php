<?php
function get_api_status_new($host, $name, $protocol, $port) {
	if ($socket = @ fsockopen($host, $port, $errno, $errstr, 2)) {
		echo "<td>" . "<a href=\"".$protocol."://" . $host . "\">" . $name . "</a>" . "</td><td><span class=\"badge badge-success\"><i class=\"fas fa-check\"></i> Online</span></td>";
		fclose($socket);
	} else {
		echo "<td>" . "<a href=\"".$protocol."://" . $host . "\">" . $name . "</a>" . "</td><td><span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i> Offline</span></td>";
	}
}

echo get_api_status_new($_POST["host"], $_POST["name"], $




?>
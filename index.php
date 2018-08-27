<?php
	$serverName = "192.168.102.34";
	$connectionInfo = array("Database" => "Database01", "UID" => "user01", "PWD" => "IniAdalahPassword");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	if (!$conn) {
		echo("Connection Failed, please re-check your DB sredential");
	} else {
		echo "Connection Established";
	}
?>

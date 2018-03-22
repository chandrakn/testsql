<?php
	$serverName = "192.168.102.38";
	$connectionInfo = array("Database" => "db-chandra", "UID" => "chandra", "PWD" => "P@ssw0rd12345");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	if (!$conn) {
		echo("Something went wrong while connecting to MSSQL");
	} else {
		echo "Connection Established";
	}
?>

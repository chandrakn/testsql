<?php
	$serverName = "192.168.102.34,1433";
	$connectionInfo = array("Database" => "Test5", "UID" => "chandra", "PWD" => "P@ssw0rd12345");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	if (!$conn) {
		echo("Something went wrong while connecting to MSSQL");
	} else {
		echo "Connection Established";
	}
?>

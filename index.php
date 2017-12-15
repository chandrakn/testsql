<?php
  $myServer = "192.168.102.34,1433";
  $myUser = "chandrakn";
  $myPass = "P@ssw0rd12345";
  $myDB = "Test3";

  $conn = mssql_connect($myServer,$myUser,$myPass);
  if (!$conn)
  { 
    die('Not connected : ' . mssql_get_last_message());
  } 
  $db_selected = mssql_select_db($myDB, $conn);
  if (!$db_selected) 
  {
    die ('Can\'t use db : ' . mssql_get_last_message());
  } 
?>

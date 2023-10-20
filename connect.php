<?php
    $user = "LAPTOP-H6VM1SGS\Brisk"; 
    $password = "";
    $ODBCConnection = odbc_connect("DRIVER={Devart ODBC Driver for SQL Server};Server=myserver;Database=mydatabase; Port=myport;String Types=Unicode", $user, $password);
?>

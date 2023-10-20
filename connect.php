<?php
    $user = "LAPTOP-H6VM1SGS\Brisk"; 
    $password = "";
    $ODBCConnection = odbc_connect("DRIVER={Devart ODBC Driver for SQL Server};Server=myserver;Database=mydatabase; Port=myport;String Types=Unicode", $user, $password);

    $SQLQuery = "SELECT * FROM customers";
    $RecordSet = odbc_exec($ODBCConnection, $SQLQuery);

    while (odbc_fetch_row($RecordSet)) {
        $result = odbc_result_all($RecordSet, "border=1");
    }
    odbc_close($ODBCConnection);
?>

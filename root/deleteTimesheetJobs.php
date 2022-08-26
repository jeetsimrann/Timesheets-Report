<?php
    // Check if cookie exists
    $request = $_REQUEST;
    $TimeSheetJobID = $_GET['TimeSheetJobID'];
    
	include "dbconnect.php";
	$sql = "DELETE FROM dbo.tblTimesheetsJobs WHERE TimeSheetJobID ='".$TimeSheetJobID."';";

	$stmt = sqlsrv_query( $conn, $sql);
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

?>
<?php
    // Check if cookie exists
    $request = $_REQUEST;
    $tsid = $_GET['tsid'];
    
	include "dbconnect.php";
	$sql = "DELETE FROM dbo.tblTimesheetsJobs WHERE TimesheetdayID ='".$tsid."' AND (Hours <= 0  OR OrderID <=0);";

	$stmt = sqlsrv_query( $conn, $sql);
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

?>
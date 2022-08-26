<?php
	// Server-side code to delete timesheet

    // get TimesheetID from dashboard.php
    $request = $_REQUEST;
    $TimesheetID = $_GET['TimesheetID'];

    // establish connection
	include "dbconnect.php";

	// query to delete Timesheet, TimesheetDays and TimesheetJobs
    $sql = "DELETE FROM dbo.tblTimesheets WHERE TimesheetID ='".$TimesheetID."';";
    $sql .= "DELETE FROM dbo.tblTimesheetsDays WHERE TimesheetID ='".$TimesheetID."';";

	while ($data=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
	    $sql .= "DELETE FROM dbo.tblTimesheetsJobs WHERE TimesheetdayID ='".$data['TimesheetDayID']."';";
    }

	// execute query 
	$stmt = sqlsrv_query( $conn, $sql);

	// throw error if failed to excute query
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

	// free statement
    sqlsrv_free_stmt($stmt); 

    // close connection
    sqlsrv_close($conn);
    
	// response after successfully deleted 
    echo "Succesfully deleted Timesheet!";
?>
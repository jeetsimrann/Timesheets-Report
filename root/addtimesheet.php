<?php
session_start();
?>
<?php
    date_default_timezone_set('America/New_York');
    $EmptyExpenseLineArr = array();

    $request = $_REQUEST;
    $dts = $request['dts']." ".date("H:i:s");

	include "dbconnect.php";
	$sql = "INSERT INTO dbo.tblTimesheets (EmployeeID,StartDay) VALUES ('".$_SESSION['EmployeeID']."','".$dts."');
            SELECT SCOPE_IDENTITY()";

	$stmt = sqlsrv_query( $conn, $sql);
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}
    sqlsrv_next_result($stmt); 
    sqlsrv_fetch($stmt);


    $tsID = sqlsrv_get_field($stmt, 0);
    echo $tsID;

    for($index = 0 ; $index < 7; $index ++){
            $date = new DateTime($dts);
            $dlist = $date->modify('+'.$index.' day')->format('Y-m-d');
            $sql2 = "INSERT INTO dbo.tblTimesheetsDays (TimesheetID,TimesheetDate) VALUES ('".$tsID."','".$dlist."');
                     SELECT SCOPE_IDENTITY()";

            $stmt2 = sqlsrv_query( $conn, $sql2);
            if( $stmt2 === false ) {
                die( print_r( sqlsrv_errors(), true));
            }
            sqlsrv_next_result($stmt2); 
            sqlsrv_fetch($stmt2);

            // if($index !=6 ){
            //     echo sqlsrv_get_field($stmt2, 0). ' ';
            // }
            // else{
            //     echo sqlsrv_get_field($stmt2, 0);
            // }
        }
    // $EmptyExpenseLineArr = array($selID, $SID, 0, 0.00, 0, 0, 0, NULL, 0, null);
?>

<?php
    $id = $_GET['id'];

    require_once('dbconnect.php');
    date_default_timezone_set('America/New_York');
    $TimesheetDaysArr = array();

    $sqlQuery = "SELECT TOP (10) dbo.tblTimesheetsDays.TimesheetDayID, dbo.tblTimesheetsDays.TimesheetID, dbo.tblTimesheetsDays.TimesheetDate FROM dbo.tblTimesheetsDays WHERE TimesheetID ='" .$id . "' ORDER BY TimesheetDayID ASC;";
    $result = sqlsrv_query($conn,$sqlQuery, $params, $options) or die("Couldn't execut query");
    while ($row= sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
        array_push($TimesheetDaysArr,array(
                    $row['TimesheetDayID'],
                    $row['TimesheetID'],
                    date_format($row['TimesheetDate'], 'Y-m-d')
                    
                )
        );
    }
    // echo "<script>console.log(JSON.parse('" . json_encode($TimesheetDaysArr) . "'));</script>";
    
?>
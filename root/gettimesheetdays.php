
<?php
    $id = $_GET['id'];

    require_once('dbconnect.php');
    date_default_timezone_set('America/New_York');
    $TimesheetDaysArr = array();
    $TotalHoursArr = array();
    $TimeRangeArr = array();
    $tempStArr = array();
    $tempEtArr = array();
    $tempArr = array();

    $sqlQuery = "SELECT TOP (10) dbo.tblTimesheetsDays.TimesheetDayID, dbo.tblTimesheetsDays.TimesheetID, dbo.tblTimesheetsDays.TimesheetDate FROM dbo.tblTimesheetsDays WHERE TimesheetID ='" .$id . "' ORDER BY TimesheetDayID ASC;";
    $result = sqlsrv_query($conn,$sqlQuery, $params, $options) or die("Couldn't execut query");
    while ($row= sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
        
        array_push($tempArr, $row['TimesheetDayID']);

        array_push($TimesheetDaysArr,array(
                    $row['TimesheetDayID'],
                    $row['TimesheetID'],
                    date_format($row['TimesheetDate'], 'Y-m-d')
                    
                )
        );
    }

    foreach ($tempArr as &$value){
        $sqltime = "SELECT StartTime, EndTime FROM dbo.tblTimesheetsJobs
                    -- INNER JOIN dbo.tblCustomers ON dbo.tblCustOrders.CustID = dbo.tblCustomers.CustID
                    WHERE TimesheetdayID='".$value."'";
        $resulttime = sqlsrv_query($conn,$sqltime) or die("Couldn't execut query");
        $timeRange = 0;
        while ($data=sqlsrv_fetch_array($resulttime, SQLSRV_FETCH_ASSOC)){
            // $hours += $data['Hours'];
            array_push($tempStArr, date_format($data['StartTime'], 'H:i'));
            array_push($tempEtArr, date_format($data['EndTime'], 'H:i'));
        }
        array_push($TimeRangeArr, array(min($tempStArr), max($tempEtArr)));
        unset($tempStArr);
        $tempStArr = array();
        unset($tempEtArr);
        $tempEtArr = array();

    }

    foreach ($tempArr as &$value){
        $sqlupdt = "SELECT Hours FROM dbo.tblTimesheetsJobs
                    -- INNER JOIN dbo.tblCustomers ON dbo.tblCustOrders.CustID = dbo.tblCustomers.CustID
                    WHERE TimesheetdayID='".$value."' AND NOT OrderID like '8102'";
        $resultupdt = sqlsrv_query($conn,$sqlupdt) or die("Couldn't execut query");
        $hours = 0;
        while ($data=sqlsrv_fetch_array($resultupdt, SQLSRV_FETCH_ASSOC)){
            $hours += $data['Hours'];
        }
        array_push($TotalHoursArr, $hours);
    }

    
?>
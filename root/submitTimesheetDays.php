
<?php
    $tsid = $_GET['tsid'];
    $orderids = $_GET['orderids'];
    $startTime = $_GET['startTime'];
    $endTime = $_GET['endTime'];
    $notes = $_GET['notes'];
    $TimeSheetJobID = $_GET['TimeSheetJobID'];

    date_default_timezone_set('America/New_York');
    
    $arr= $orderids . "&" . $startTime . "&" . $endTime . "&" . $notes . "&" . $TimeSheetJobID;

    require_once('dbconnect.php');

    // parse_str($orderids,$resultArr);

    parse_str($arr,$resultArr);

    $totalTimeArr = array();
    for($index = 0 ; $index < count($resultArr[startTime]); $index ++){
        
        $time1 = $resultArr[startTime][$index];
        $time2 = $resultArr[endTime][$index];

        $array1 = explode(':', $time1);
        $array2 = explode(':', $time2); 

        $minutes1 = ($array1[0] * 60.0 + $array1[1]);
        $minutes2 = ($array2[0] * 60.0 + $array2[1]);

        $diff = (($minutes2 - $minutes1)/60);


        // $datetime1 = "2022-12-30"." " . $resultArr[startTime][0] .":00";
        // $diff = date("Y-m-d H:i:s",strtotime($datetime1));

        array_push($totalTimeArr, $diff);
    }


    $sql_TimesheetJobs = "";  

    $DateModified = date('Y-m-d H:i:s');

    for($index = 0 ; $index < count($resultArr[orderids]); $index ++){
        // if($input_expID[$index] != 0){
            $datetime1 = "1999-12-30"." " . $resultArr[startTime][$index] .":00";
            $datetime1 = date("Y-m-d H:i:s",strtotime($datetime1));

            $datetime2 = "1999-12-30" . " " . $resultArr[endTime][$index] .":00";
            $datetime2 = date("Y-m-d H:i:s",strtotime($datetime2));

            // $sql_TimesheetJobs .= "INSERT INTO dbo.tblTimesheetsJobs (TimesheetdayID,OrderID,Hours,StartTime,EndTime,Notes) VALUES (".$tsid.",".$resultArr[orderids][$index].",".$totalTimeArr[$index].",'".$datetime1."','".$datetime2."','".$resultArr[notes][$index]."');";
            $sql_TimesheetJobs .= "UPDATE dbo.tblTimesheetsJobs 
                                   SET TimesheetdayID = ".$tsid.",
                                   OrderID = ".$resultArr[orderids][$index].",
                                   Hours=".$totalTimeArr[$index].",
                                   StartTime = '".$datetime1."',
                                   EndTime = '".$datetime2."',
                                   Notes = '".$resultArr[notes][$index]."',
                                   DateModified = '".$DateModified."'
                                   WHERE TimeSheetJobID = ".$resultArr[TimeSheetJobID][$index].";";
    }

    $stmt = sqlsrv_query( $conn, $sql_TimesheetJobs );
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

    print_r($totalTimeArr);
    // print_r($resultArr);

?>
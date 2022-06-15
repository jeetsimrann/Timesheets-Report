
<?php
    $tsid = $_GET['tsid'];
    $orderids = $_GET['orderids'];

    require_once('dbconnect.php');

    parse_str($orderids,$new_data);

    $sql_TimesheetJobs = "";  

    for($index = 0 ; $index < count($new_data[orderids]); $index ++){
        // if($input_expID[$index] != 0){
             $sql_TimesheetJobs .= "INSERT INTO dbo.tblTimesheetsJobs (TimesheetdayID,OrderID) VALUES (".$tsid.",".$new_data[orderids][$index].");";
    }

    $stmt = sqlsrv_query( $conn, $sql_TimesheetJobs );
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

    print_r($new_data[orderids]);

    
    // $sql_Timeshee = "";  
    // $params_ExpenseLine = array();

    // $arrSubmit = array();
    
    // $i=0;
    // foreach($new_data as $msg){
    //     array_push($arrSubmit, $msg[$i]);
    //     $i+=1;
    // };

    // $json = json_encode($new_data);
    // $obj = json_decode($json[0], TRUE);

    // foreach($obj as $key => $value) 
    // {
    // echo 'Your key is: '.$key.' and the value of the key is:'.$value;
    // }

    // $EmptyTaskLineArr = array();

    // $request = $_REQUEST;
    // $SID = $request['SID'];
    
	// include "dbconnect.php";
	// $sql = "INSERT INTO dbo.tblServiceTaskLines (ServiceID,Notes) VALUES (".$SID.",'');
    //         SELECT SCOPE_IDENTITY()";

	// $stmt = sqlsrv_query( $conn, $sql);
	// if( $stmt === false ) {
	// 	die( print_r( sqlsrv_errors(), true));
	// }
    // sqlsrv_next_result($stmt); 
    // sqlsrv_fetch($stmt);

    // echo sqlsrv_get_field($stmt, 0);


?>
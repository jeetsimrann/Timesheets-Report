<?php
        $tsid = $_GET['tsid'];
        // date_default_timezone_set('America/New_York');

        require "dbconnect.php";

        $sqlDel = "DELETE FROM dbo.tblTimesheetsJobs WHERE TimesheetdayID ='".$tsid."' AND (Hours <= 0  OR OrderID <=0);";

        $stmtDel = sqlsrv_query( $conn, $sqlDel);
        if( $stmtDel === false ) {
            die( print_r( sqlsrv_errors(), true));
        }

        $sql = "SELECT * FROM dbo.tblTimesheetsJobs
                    WHERE TimesheetdayID=".$tsid;
        $result = sqlsrv_query($conn,$sql) or die("Couldn't execut query");
        $timesheetjobarr = array();
        $orderdetailarr = array();
        $orderidarr = array();

        while ($data=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){

            array_push($orderidarr,$data['OrderID']);

            array_push($timesheetjobarr, array(
                        $data['TimeSheetJobID'],
                        $data['TimesheetdayID'],
                        $data['OrderID'],
                        $data['Hours'],
                        date_format($data['StartTime'], 'H:i'),
                        date_format($data['EndTime'], 'H:i'),
                        $data['Notes'],
                    )
            );
        }

    foreach ($orderidarr as &$value){
        $sqlupdt = "SELECT * FROM dbo.tblCustOrders 
                    INNER JOIN dbo.tblCustomers ON dbo.tblCustOrders.CustID = dbo.tblCustomers.CustID
                    WHERE OrderID='".$value."'";
        $resultupdt = sqlsrv_query($conn,$sqlupdt) or die("Couldn't execut query");
        while ($dataupdt=sqlsrv_fetch_array($resultupdt, SQLSRV_FETCH_ASSOC)){
            array_push($orderdetailarr ,array(
                    $dataupdt['OrderNo'],
                    $dataupdt['Title'],
                    $dataupdt['CustomerName'],
                )
            );
        }
    }
    $array1 = array($timesheetjobarr);
    $array2 = array($orderdetailarr);
    $result = array_merge($array1, $array2);
    // $result = array_merge($timesheetjobarr, $orderdetailarr);

    // var_export($timesheetjobarr);
    echo json_encode($result);
?>

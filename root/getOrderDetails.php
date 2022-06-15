<?php
        require "dbconnect.php";
        $orderId = $_GET['orderId'];
        $OrderDetails = array();
        $sqlupdt = "SELECT * FROM dbo.tblCustOrders 
                    INNER JOIN dbo.tblCustomers ON dbo.tblCustOrders.CustID = dbo.tblCustomers.CustID
                    WHERE OrderNo='".$orderId."'";
        $resultupdt = sqlsrv_query($conn,$sqlupdt) or die("Couldn't execut query");
        while ($dataupdt=sqlsrv_fetch_array($resultupdt, SQLSRV_FETCH_ASSOC)){
            // $CustomerName = $dataupdt['CustomerName'];
            // $Title = $dataupdt['Title'];
            array_push($OrderDetails, $dataupdt['CustomerName']);
            array_push($OrderDetails, $dataupdt['Title']);
            array_push($OrderDetails, $dataupdt['OrderID']);
        }
         
            
        echo json_encode($OrderDetails, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        
?>
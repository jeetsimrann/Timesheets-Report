<?php
    session_start();
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Service Report Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- afa icon -->
<script id='wpacu-combined-js-head-group-1' type='text/javascript' src='https://www.afasystemsinc.com/wp-content/cache/asset-cleanup/js/head-5e3e4d2c92fdd7fbfd909d433c07b6d9193b10e1.js'></script><link rel="https://api.w.org/" href="https://www.afasystemsinc.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.afasystemsinc.com/wp-json/wp/v2/pages/11" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta name="google-site-verification" content="U_fWjqoTqoM87P1nyU91rpuLqqR0v2Yq6ZxPgKTOHF8"><link rel="icon" href="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-270x270.png" />

 <link rel="stylesheet" href="..\assets\css\style.css"/>
 <!-- Google Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700"/>

 <!-- Datatables -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/sb-1.3.2/sp-2.0.0/datatables.min.css"/>
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/sb-1.3.2/sp-2.0.0/datatables.min.js"></script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Bootstrap CDN -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <!-- Bootstrap CDN -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" charset="utf-8" src="../assets/vendor/js.cookie.js"></script>

</head>

<body>
<?php require 'gettimesheetdays.php'; ?>
<?php require 'sp_qryCustOrderService.php'; ?>

<div class="timesheet-header">
    <div class="timesheet-header-front">
        <div>Monday, May 2, 2022</div>
        <div style="margin-left: 5px;">&#10247;</div>
        <div>Sunday, May 8, 2022</div>
    </div>
</div>
<form id="timesheetForm" method="post" action="submitTimesheetForm.php" autocomplete="off" enctype="multipart/form-data">
<input type="hidden" id="mainID" name="mainID" value="<?php echo $id;?>"/>
<div class="timesheet-container" style="top:15%;left:0;">
    <ul class="list-group week-list">
        <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
            <!-- head -->
            <span class="day-head" value="Monday">MONDAY</span>
            <!-- card content  -->
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-mon date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-mon month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                        8 hrs
                    </div>
                </div>
            </div>
        </li>


        <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModal" data-bs-whatever="hello">
        <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
        <span class="day-head" value="Tuesday">TUESDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                    8 hrs
                    </div>
                </div>
            </div>
        </li>

        <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
            <span class="day-head" value="Wednesday">WEDNESDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                    8 hrs
                    </div>
                </div>
            </div>
        </li>

        <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
            <span class="day-head" value="Thursday">THURSDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                    8 hrs
                    </div>
                </div>
            </div>
        </li>


        <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
            <span class="day-head" value="Friday">FRIDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                    8 hrs
                    </div>
                </div>
            </div>
        </li>

        <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
            <span class="day-head" value="Saturday">SATURDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                    8 hrs
                    </div>
                </div>
            </div>
        </li>

        <li class="list-group-item day-list last-day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1"></input>
            <span class="day-head" value="Sunday">SUNDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-arr[]"> 21</span> 
                        <br>
                        <span class="month-head month-head-arr[]"> Jan 2021 </span>
                    </div>
                    <div class="col-sm day-detail time-head">
                        1200 &nbsp; - &nbsp; 1600
                    </div>
                    <div class="col-sm day-detail hours-head">
                    <span class="material-icons">schedule</span>&nbsp;
                    8 hrs
                    </div>
                </div>
            </div>
        </li>
    </ul>
    </div>

    

    
    <!-- Monday Modal  -->
    <div class="modal fade animate" id="tsModalMon" role="dialog" aria-labelledby="tsModalMonLabel" aria-hidden="true">
        <div class="modal-dialog edit-modal-dialog">
                <div class="modal-content  animate-bottom">
                <div class="modal-header">
                    <h5 class="modal-title" id="tsModalMonLabel">Monday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="card-body">
                            <div id="mon-order-accordion">
                                <div class="wrapper-mon">
                                    <button class="btn btn-primary add-btn-mon">Add Timesheet Order</button></br>
                                    <span class="mon-empty mt-2" style="font-size:1rem; color:grey;">No timesheet order added yet</span>
                                    <input type="hidden" class="form-control tsid" name="tsid" value="-1"/>
                                </div>  
                            </div>  
                        </div> 
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="submit-mon" class="btn btn-primary">Submit Hours</button>
                            <!-- <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Submit Hours"/> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="modal fade animate" id="tsModal" role="dialog" aria-labelledby="tsModalLabel" aria-hidden="true">
        <div class="modal-dialog edit-modal-dialog">
            <div class="modal-content  animate-bottom">
            <div class="modal-header">
                <h5 class="modal-title" id="tsModalLabel">Day</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3  ">
                    <label for="travelfrom">Travel From</label>
                    <input type="text" class="form-control" id="travelfrom" name="travelfrom" placeholder="Enter Travel From" value=""   />
                </div>
                <div class="form-group mb-3  ">
                    <label for="travelto">Travel To</label>
                    <input type="text" class="form-control" id="travelto" name="travelto" placeholder="Enter Travel To"   />
                </div>
                <div class="form-group mb-3  ">
                    <label for="Customer">Customer</label>
                    <input type="text" class="form-control" id="Customer" name="Customer" placeholder="Enter Customer"  />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button"  class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="OrderNoModal" role="dialog" aria-labelledby="OrderNoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document" style="margin-top: 5rem;">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="btn-close" aria-label="Close" style="float:right;margin-bottom:1rem;" data-dismiss="modal"></button>
                                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                                <br>
                                                <div class="">
                                                    <div class="post-wall">
                                                        <div id="post-list">
                                                            <?php
                                                            include "dbconnect.php";

                                                            $sqlQuery = "SELECT * FROM dbo.tblCustOrders ;";
                                                            $params = array();
                                                            $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                                                            $result = sqlsrv_query($conn,$sqlQuery, $params, $options) or die("Couldn't execut query");
                                                            $total_count = sqlsrv_num_rows( $result )  ;
                                                            $sqlQuery = "SELECT TOP (10) dbo.tblCustOrders.*, dbo.tblCustomers.CustomerName FROM dbo.tblCustOrders LEFT JOIN dbo.tblCustomers ON dbo.tblCustOrders.CustID = dbo.tblCustomers.CustID ORDER BY dbo.tblCustOrders.OrderID DESC";
                                                            $result = sqlsrv_query($conn,$sqlQuery, $params, $options) or die("Couldn't execut query");
                                                            ?>
                                                            <input type="hidden" name="total_count" id="total_count"
                                                            value="<?php echo $total_count; ?>" />

                                                            <?php
                                                            while ($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                                                    $content = $row['OrderNo'];
                                                                ?>
                                                            <label class="post-item" style="width:100%;" id="<?php echo $row['OrderID']; ?>">
                                                                <p class="post-title" style="margin-bottom:0!important;">
                                                                    <input type="radio" class="form-check-input me-1" name="orderno" value="<?php echo $row['OrderNo']; ?>">
                                                                    <?php echo $row['OrderNo']; ?> - 
                                                                    <span style="color:grey;important;font-size:0.8rem;">
                                                                        <?php if($row['CustomerName']!=null){echo $row['CustomerName']; }?>
                                                                    </span>
                                                                    <div  style="color:grey;important;font-size:0.8rem;width:100%">
                                                                        <?php if($row['Title']!=null){echo "Description: ".$row['Title']; } ?>
                                                                    </div>
                                                                </p>
                                                                
                                                            </label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div id="post-list2" >
                                                            <p>Hello</p>
                                                        </div>
                                                        <div class="ajax-loader text-center">
                                                            <img src="LoaderIcon.gif"> Loading more orders...
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Select</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</form>

</body>
</html>

<script>
    var TimesheetDaysArr  = <?php echo JSON_encode($TimesheetDaysArr);?>;
    console.log(TimesheetDaysArr);

  $(document).ready(function () {

    const TimesheetDayID = $('[name="TimesheetDayID[]"]');
    const modalCard = $('[name="modalCard[]"]');
    // const carddate = $('[class="date-head-arr[]"]');
    // const cardmonth = $('[class="month-head-arr[]"]');
    // var j = 0;
    for ( let i = 0; i < TimesheetDayID.length; i += 1 ) {
        $( TimesheetDayID[ i ] ).val( TimesheetDaysArr[i][0] );
        $( modalCard[ i ] ).attr("data-bs-id" , TimesheetDaysArr[i][0] );

        var carddate = $(TimesheetDayID[ i ]).closest('.list-group-item').find('.date-head');
        var cardmonth = $(TimesheetDayID[ i ]).closest('.list-group-item').find('.month-head');
        
        const d = new Date(TimesheetDaysArr[i][2]);
        $(carddate).text(d.getDate()+1);
        $(cardmonth).text((d.toLocaleString('en-us', { month: 'short' })) + " " + d.getFullYear());
        
        console.log("Date: " + d.getDate() + " Month: "+ (d.toLocaleString('en-us', { month: 'short' })) +" Year: "+ d.getFullYear());
        
    }
});
</script>

<script>
    $('#OrderNoModal').on('show.bs.modal', function (e) {
        $("#OrderNoModal").css("z-index", 2000);
        $(".modal-backdrop").css("z-index", 1090);
    });
    $('#OrderNoModal').on('hide.bs.modal', function (e) {
            $(".modal-backdrop").css("z-index", 1040);
    });

    var ordermodalid = "";
    $('#OrderNoModal').on('show.bs.modal', function (e) {
        var $trigger = $(e.relatedTarget);
        ordermodalid = $trigger.data('id');
    });

    $(document).ready(function(){
        var passedArray = <?php echo $arrCustomerName; ?>;
        var passedArray2 = <?php echo $arrFullAddress; ?>;
        // $("input:radio").change(function() {
        $('body').on('change', 'input[name="orderno"]', () => {   
            // var result =  $(this).val();
            var result = $("input[type='radio'][name='orderno']:checked").val();
            $("[data-id="+ordermodalid+"]").val(result);
            console.log(result);
            console.log(ordermodalid);
            getOrderDetails(result);
        });
    });

    function getOrderDetails(orderId) {
        $.ajax({
            url: 'getOrderDetails.php?orderId=' + orderId,
            type: "get",
            dataType:"json",
            beforeSend: function ()
            {
            },
            success: function (data) {
                $orderDetails = data;
                // $("#ordernos").attr("value", $orderDetails[2]);
                $("[data-id="+ordermodalid+"]").attr("value", $orderDetails[2]);
                $("[data-id="+ordermodalid+"]").parent().parent().find("#orderids").attr("value", $orderDetails[2]);
                $("[data-id="+ordermodalid+"]").parent().parent().find("#title").attr("value", $orderDetails[1]);
                $("[data-id="+ordermodalid+"]").parent().parent().find("#Customer").attr("value", $orderDetails[0]);
                // $("#Customer").attr("value", $orderDetails[0]);
                // $("#title").attr("value", $orderDetails[1]);
            }
        });
    };

    // $(document).on("click","input[name=orderno]",function(){
        

    //     if($(this).prop("checked") == true){
    //         $(this).parent().parent().addClass("list-selected");
    //         // alert("hello");
    //         // $(this).parent().parent().css({"width": "100%","border": "3px #82abe9 solid", "background-color": "#ededed", "box-shadow": "0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%)"});
    //     }
    //     else if($(this).prop("checked") == false){
    //         $(this).parent().parent().removeClass("list-selected");
    //         // $("#txtAge").hide();
    //     }
    // });
</script>

<script>


var tsModal = document.getElementById('tsModal')
        tsModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-id');
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
       
        var day = button.getAttribute('.day-head');
        var modalTitle = tsModal.querySelector('.modal-title');
        var modalBodyInput = tsModal.querySelector('.modal-body input');

        modalTitle.textContent = 'New message to ' + recipient;
        modalBodyInput.value = recipient;
});


</script>

<script>
        var tsModalMon = document.getElementById('tsModalMon');
        tsModalMon.addEventListener('show.bs.modal', function (event) {
            var datemon= $(".date-head-mon").text();
            var monthmon = $(".month-head-mon").text();
            // var eventId =document.getElementById('tsModalMon').attr("data-bs-id");
            // $("#timesheetDayID").text("Monday, " + datemon + " " + monthmon);
            var button = event.relatedTarget;
            var tsid = button.getAttribute('data-bs-id');
            
            $("#tsModalMonLabel").text("Monday, " + datemon + " " + monthmon); 
            $(".tsid").val(tsid);
        });

    // allowed maximum input fields
    var max_input = 8;
    // initialize the counter for textbox
    var x = 1;
    var index = 1;
    $('.add-btn-mon').click(function (e) {
      e.preventDefault();

            if (x < max_input) { // validate the condition
                x++; // increment the counter
                $('.mon-empty').hide();
                $('.wrapper-mon').append(`
                    
                    <div class="card mt-2" style="position: relative;border-radius: 15px;">
                        <div class="card-header btn btn-link collapsed expandform" id="monhead`+index+`" data-toggle="collapse" data-target="#mon`+index+`" aria-expanded="false" aria-controls="mon`+index+`" style="text-align: left; font-weight:500; color: #000000; text-decoration:none; margin-top: 0; margin-right: 0;
                            margin-left: 0;
                            box-shadow: 0;
                            border-radius: 0;background-color: rgba(0,0,0,.03);">
                                                    Timesheet Order 
                                <span style="color:grey;font-weight:light;font-size:0.8rem;" id="car-header-hours">                           
                                </span>
                        </div>
                        <span class="btn btn-danger remove-btn-mon w-25" style="position: absolute;right: 0;padding: 0.5rem;border-radius: 15px;"> Delete</span>
                        <div id="mon`+index+`" class="collapse" aria-labelledby="monhead`+index+`" data-parent="#mon-order-accordion">
                            <div class="card-body">

                            <div class="form-group mb-3  ">
                                <label for="orderno">Order Number</label>
                                <input class="form-control" type="text" name="ordernos[]" data-id="ordernos`+index+`" data-toggle="modal" data-target="#OrderNoModal"  placeholder="Select Order Number" id="ordernos" style="background-color: #ffffff;"
                                value="<?php echo $OrderNo;?>"/>
                                <input type="hidden" class="form-control" id="orderids" name="orderids[]" value="-1"/>
                            </div>

                            <div class="form-group mb-3  ">
                                <label for="title">Order Description</label>
                                <input type="text" class="form-control" id="title" name="title[]" placeholder="Enter Order Description" readonly/>
                            </div>

                            <div class="form-group mb-3  ">
                                <label for="Customer">Customer</label>
                                <input type="text" class="form-control" id="Customer" name="Customer[]" placeholder="Enter Customer" readonly/>
                            </div>
                            
                            <div class="form-row row mb-3">
                                <div class="col">
                                    <label for="Start">Start Time</label>
                                    <input type="time" class="form-control" onkeyup="setTime()" id="startTime" name="startTime[]" step="00:15" pattern="[0-9]{2}:[0-9]{2}"></div>
                                <div class="col">
                                    <label for="End">End Time</label>
                                    <input type="time" class="form-control" id="endTime" name="endTime[]" step="00:15" pattern="[0-9]{2}:[0-9]{2}" disabled> </div>
                                <div class="err-time" style="color:red;display:none;">Error: End time cannot be less than start time!</div>
                            </div>
                                <div class="btn btn-danger collapsed" data-toggle="collapse" data-target="#mon`+index+`" aria-controls="mon`+index+`">
                                    Close
                                </div> 
                            </div> 
                        </div>
                    </div>
                `); // add input field
                index++;
            }
    });

    $('#submit-mon').click(function (e) {
      e.preventDefault();
      var tsid = $(".tsid").val();
    //   const orderno = $('[name="ordernos[]"]');
    //   var orderno = $('[name="ordernos[]"]').serialize();
    var orderids = $('[name="orderids[]"]').serialize();
        $.ajax({
                type: "GET", //we are using GET method to get data from server side
                url: 'submitTimesheetDays.php', // get the route value
                data: {tsid:tsid, orderids:orderids}, //set data
                beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
                    
                },
                success: function (response) {//once the request successfully process to the server side it will return result here
                    // console.log(response);
                    // Cookies.set("elID", response, { expires: 7, path: '/' });
                    // $honey = response;
                    // addEL(response);
                    console.log(response);
                }
        });
    });
</script>

<script>
    $(document).on('focus',"#startTime", function() {
        // something
    }).on('blur',"#startTime", function() {
        $settime = $("#startTime").val();
        $("#endTime").attr("min", $settime);
        $("#endTime").attr("value", $settime);
        $('#endTime').removeAttr("disabled");
    });

    $(document).on('click', '.wrapper-mon', function() {
        var endTime = document.getElementById("endTime");
            endTime.addEventListener("input", function() {
                $time1 = $("#startTime").val();
                $time2 = $("#endTime").val();
                var dtStart = new Date("7/20/2015 " + $time1);
                var dtEnd = new Date("7/20/2015 " + $time2);
                var diff = ((dtEnd - dtStart)/(1000*60*60)).toFixed(2);;
                if(diff<0){
                // alert("End time cannot be less than start time, please change!");
                    $(".err-time").show();
                    $("#car-header-hours").text("");
                    $("#startTime").addClass("err-box");
                    $("#endTime").addClass("err-box");
                }
                else{ 
                    $(".err-time").hide();
                    $("#car-header-hours").text(diff +" Hrs");
                    console.log($(".card-header").text());
                    $("#startTime").removeClass("err-box");
                    $("#endTime").removeClass("err-box");
                }
        }, true);

        var startTime = document.getElementById("startTime");
        startTime.addEventListener("input", function() {
                $time1 = $("#startTime").val();
                $time2 = $("#endTime").val();
                var dtStart = new Date("7/20/2015 " + $time1);
                var dtEnd = new Date("7/20/2015 " + $time2);
                var diff = ((dtEnd - dtStart)/(1000*60*60)).toFixed(2);
                if(diff<0 && document.getElementById('endTime').disabled == false){
                // alert("End time cannot be less than start time, please change!");
                    $(".err-time").show();
                    $("#car-header-hours").text("");
                    $("#startTime").addClass("err-box");
                    $("#endTime").addClass("err-box");
                }
                    else{ 
                        $(".err-time").hide();
                        $("#car-header-hours").text(diff +" Hrs");
                        console.log($(".card-header").text());
                        $("#startTime").removeClass("err-box");
                        $("#endTime").removeClass("err-box");
                }
        }, true);
    });


</script>

<script>

    // $(document).on('click', '.wrapper-mon', function() {
    //     $("#startTime").focus(function() {
    //         // console.log('in');
    //     }).blur(function() {
    //         $settime = $("#startTime").val();
    //         $("#endTime").attr("min", $settime );
    //         $("#endTime").attr("value", $settime );
    //     });
    // });

    // $(document).on('click', '.wrapper-mon', function() {
    //     var endTime = document.getElementById("endTime");
    //         endTime.addEventListener("input", function() {
    //             var diff = ( new Date("1970-1-1 " + document.getElementById("endTime").value) - new Date("1970-1-1 " + document.getElementById("startTime").value) ) / 1000 / 60 / 60; 
    //             diff = diff.toFixed(2);
    //             console.log(diff);
    //             if(diff<0){
    //             // alert("End time cannot be less than start time, please change!");
    //                 $(".err-time").show();
    //                 $("#car-header-hours").text("");
    //                 $("#endTime").addClass("err-box");
    //             }
    //             else{ 
    //                 $(".err-time").hide();
    //                 $("#car-header-hours").text(diff +" Hrs");
    //                 console.log($(".card-header").text());
    //                 $("#endTime").removeClass("err-box");
    //             }
    //     }, true);
    // });

    // $( "body" ).live( "input", "click", function() {
    //     $("#startTime").focus(function() {
    //         // console.log('in');
    //     }).blur(function() {
    //         $settime = $("#startTime").val();
    //         $("#endTime").attr("min", $settime );
    //         $("#endTime").attr("value", $settime );
    //     });
    // });
        // $("#endTime").focus(function() {
        //     // console.log('in');
        // }).blur(function() {
        //     var diff = ( new Date("1970-1-1 " + document.getElementById("endTime").value) - new Date("1970-1-1 " + document.getElementById("startTime").value) ) / 1000 / 60 / 60; 
        //     diff = diff.toFixed(2);
        //     console.log(diff);
        //     if(diff<0){
        //     // alert("End time cannot be less than start time, please change!");
        //        $(".err-time").show();
        //     }
        // });

    // $( "body" ).live( "input", "click", function() {
    //     var endTime = document.getElementById("endTime");
    //         endTime.addEventListener("input", function() {
    //             var diff = ( new Date("1970-1-1 " + document.getElementById("endTime").value) - new Date("1970-1-1 " + document.getElementById("startTime").value) ) / 1000 / 60 / 60; 
    //             diff = diff.toFixed(2);
    //             console.log(diff);
    //             if(diff<0){
    //             // alert("End time cannot be less than start time, please change!");
    //                 $(".err-time").show();
    //                 $("#car-header-hours").text("");
    //                 $("#endTime").addClass("err-box");
    //             }
    //             else{ 
    //                 $(".err-time").hide();
    //                 $("#car-header-hours").text(diff +" Hrs");
    //                 console.log($(".card-header").text());
    //                 $("#endTime").removeClass("err-box");
    //             }
    //     }, false);
    // }); 
    

        
</script>


<script>
    $(document).ready(function(){
        $('.modal-backdrop').removeClass('modal-backdrop');
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".list-group label").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>



<script type="text/javascript">

$(document).ready(function(){
        windowOnScroll();
});

function windowOnScroll() {
    // if($("#myInput").val() != ""){
            $(".post-wall").on("scroll", function(e){
                // if ($(".post-wall").scrollTop() ==$(document).height() - $(window).height()){
                    if ($(".post-wall")[0].scrollHeight - $(".post-wall").scrollTop() <= $(".post-wall").outerHeight()){
                        if($(".post-item").length < $("#total_count").val()) {
                            var lastId = $(".post-item:last").attr("id");
                            getMoreData(lastId);
                        }
                // }
                    }
            });
    // }
}

function getMoreData(lastId) {
       $(".post-wall").off("scroll");
    $.ajax({
        url: 'getMoreData.php?lastId=' + lastId,
        type: "get",
        beforeSend: function ()
        {
            $('.ajax-loader').show();
        },
        success: function (data) {
        	   setTimeout(function() {
                $('.ajax-loader').hide();
            $("#post-list").append(data);
            windowOnScroll();
        	   }, 500);
        }
   });
}
</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#post-list2").hide();
    filterList();
});

function filterList() {
        $("#myInput").on("keyup", function() {
            $("#post-list2").empty();
            if($("#myInput").val() == ""){
                $("#post-list").show();
                $("#post-list2").hide();
            }
            else{
                $("#post-list").hide();
                $("#post-list2").show();
                var searchData = $("#myInput").val();
                getSearchData(searchData);
            }
        });
    };


    function getSearchData(searchData) {
       $(".post-wall").off("scroll");
        $.ajax({
            url: 'getSearchData.php?searchData=' + searchData,
            type: "get",
            beforeSend: function ()
            {
                $('.ajax-loader').show();
            },
            success: function (data) {
                    $('.ajax-loader').hide();
                    $("#post-list2").append(data);
                    windowOnScroll();
            }
        }); 
    }
</script>
<?php
    session_start();
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <!-- title -->
    <title>AFA Timesheets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- afa icon -->
    <script id='wpacu-combined-js-head-group-1' type='text/javascript' src='https://www.afasystemsinc.com/wp-content/cache/asset-cleanup/js/head-5e3e4d2c92fdd7fbfd909d433c07b6d9193b10e1.js'></script><link rel="https://api.w.org/" href="https://www.afasystemsinc.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.afasystemsinc.com/wp-json/wp/v2/pages/11" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta name="google-site-verification" content="U_fWjqoTqoM87P1nyU91rpuLqqR0v2Yq6ZxPgKTOHF8"><link rel="icon" href="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-180x180.png" />
    <meta name="msapplication-TileImage" content="https://www.afasystemsinc.com/wp-content/uploads/2019/12/cropped-AFA_favicon-01-270x270.png" />
    <!-- css file  -->
    <link rel="stylesheet" href="..\assets\css\style.css"/>
    <!-- font family  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- datatables CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/sb-1.3.2/sp-2.0.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/sb-1.3.2/sp-2.0.0/datatables.min.js"></script>
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../assets/vendor/js.cookie.js"></script>
</head>

<body>
    <!-- import data from server side files -->
    <?php require 'gettimesheetdays.php'; ?>

    <!-- header -->
    <div class="timesheet-header ">
        <div class="d-flex justify-content-around align-items-stretch">
            <div class="timesheet-header-week"> 
                <span class="date-head date-head-mon header-week">WEEK 23</span> 
                <br>
                <span class="month-head month-head-mon header-date">May 2, 2022 to May 8, 2022</span>
            </div>
            <div class="timesheet-header-hours"> 
                <span class="date-head date-head-mon total-hours">37.5</span> 
                <br>
                <span class="month-head month-head-mon">Total Hours</span>
            </div>
        </div>
    </div>

<!-- timesheet form  -->
<form id="timesheetForm" method="post" action="submitTimesheetForm.php" autocomplete="off" enctype="multipart/form-data">
    <!-- timesheetID, hidden field -->
    <input type="hidden" id="mainID" name="mainID" value="<?php echo $id;?>"/>
    <!-- container for TimesheetDays cards -->
    <div class="timesheet-container" style="top:15%;left:0;">

        <ul class="list-group week-list">
            <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                            <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>


            <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                        <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                        <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                        <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>


            <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                        <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                        <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item day-list last-day-list" name="modalCard[]" data-bs-toggle="modal" data-bs-id="-1" data-bs-date="-1" data-bs-target="#tsModalMon" data-bs-whatever="hello">
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
                        <span class="hours-head-span">8 hrs</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    

    
    <!-- Modal to show hours -->
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
                                    <button class="btn btn-primary add-btn-mon">Add Timesheet Order</button>
                                    <span class="mon-empty mt-2" style="font-size:1rem; color:grey;">No timesheet order added yet</span>
                                    <input type="hidden" class="form-control tsid" name="tsid" value="-1"/>
                                </div>  
                            </div>  
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="submit-mon" class="btn btn-primary">Submit Hours</button>
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
                                    $sqlQuery = "SELECT TOP (10) dbo.tblCustOrders.*, dbo.tblCustomers.CustomerName FROM dbo.tblCustOrders LEFT JOIN dbo.tblCustomers ON dbo.tblCustOrders.CustID = dbo.tblCustomers.CustID WHERE NOT OrderNo like '%Q%' ORDER BY dbo.tblCustOrders.OrderID DESC";
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
    // Json arrays from gettimesheetdays.php
    var TimesheetDaysArr  = <?php echo JSON_encode($TimesheetDaysArr);?>;
    var TotalHoursArr  = <?php echo JSON_encode($TotalHoursArr);?>;
    var TimeRangeArr  = <?php echo JSON_encode($TimeRangeArr);?>;

    //  function fills timesheet days data
    $(document).ready(function () {
        const TimesheetDayID = $('[name="TimesheetDayID[]"]');
        const modalCard = $('[name="modalCard[]"]');
        for ( let i = 0; i < TimesheetDayID.length; i += 1 ) {
            $( TimesheetDayID[ i ] ).val( TimesheetDaysArr[i][0] );
            $( modalCard[ i ] ).attr("data-bs-id" , TimesheetDaysArr[i][0] );

            var carddate = $(TimesheetDayID[ i ]).closest('.list-group-item').find('.date-head');
            var cardmonth = $(TimesheetDayID[ i ]).closest('.list-group-item').find('.month-head');
            var cardtimerange = $(TimesheetDayID[ i ]).closest('.list-group-item').find('.time-head');
            var cardhours = $(TimesheetDayID[ i ]).closest('.list-group-item').find('.hours-head-span');

            $(cardtimerange).text( TimeRangeArr[i][0] == false ? "-" : tConvert(TimeRangeArr[i][0]) + " - " + tConvert(TimeRangeArr[i][1]));
            $(cardhours).text( TotalHoursArr[i] == 0 ? "- hrs" : TotalHoursArr[i].toFixed(2) + " hrs");

            const d = new Date(TimesheetDaysArr[i][2]);

            $(carddate).text(d.getUTCDate());
            $(cardmonth).text((d.toLocaleString('en-us', { month: 'short' })) + " " + d.getFullYear());
            
            console.log("Date: " + d.getDate() + " Month: "+ (d.toLocaleString('en-us', { month: 'short' })) +" Year: "+ d.getFullYear());

            days = ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
            $( modalCard[ i ] ).attr("data-bs-date" , days[d.getUTCDay()] + ", " +  d.getUTCDate() + " " + (d.toLocaleString('en-us', { month: 'short' })) + " " + d.getFullYear());
            
            if(i==0){
                $week = d.getWeekNumber();
                $fromdate = (d.toLocaleString('en-us', { month: 'short' })) + " " + d.getUTCDate() + ", " +  d.getFullYear();
            }
            if(i==6){
                $todate = (d.toLocaleString('en-us', { month: 'short' })) + " " + d.getUTCDate() + ", " +  d.getFullYear();
            }
        }
        $(".header-week").html("WEEK " + $week);
        $(".header-date").html($fromdate + " to " + $todate);
        $sumTotalHoursArr = 0;
        $.each(TotalHoursArr, (i, v) => $sumTotalHoursArr += v);
        $(".total-hours").html($sumTotalHoursArr);
    });

    // function returns the week number of the year
    Date.prototype.getWeekNumber = function(){
        var d = new Date(Date.UTC(this.getFullYear(), this.getMonth(), this.getDate()));
        var dayNum = d.getUTCDay() || 7;
        d.setUTCDate(d.getUTCDate() + 4 - dayNum);
        var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
        return Math.ceil((((d - yearStart) / 86400000) + 1)/7)+1
    };

</script>

<script>
    // function adds backdrop when modal opened 
    $('#OrderNoModal').on('show.bs.modal', function (e) {
        $("#OrderNoModal").css("z-index", 2000);
        $(".modal-backdrop").css("z-index", 1090);
    });

    // function removes backdrop when modal closed
    $('#OrderNoModal').on('hide.bs.modal', function (e) {
            $(".modal-backdrop").css("z-index", 1040);
    });

    // get TimesheetDayID from card which triggered modal 
    var ordermodalid = "";
    $('#OrderNoModal').on('show.bs.modal', function (e) {
        var $trigger = $(e.relatedTarget);
        ordermodalid = $trigger.data('id');
    });
</script>

<script>
    // function displays customer name and title of selected order 
    $(document).ready(function(){
        $('body').on('change', 'input[name="orderno"]', () => {   
            var result = $("input[type='radio'][name='orderno']:checked").val();
            getOrderDetails(result);
        });
    });

    //  function returns order details using ajax call 
    function getOrderDetails(orderId) {
        $.ajax({
            url: 'getOrderDetails.php?orderId=' + orderId,
            type: "get",
            dataType:"json",
            beforeSend: function (){},
            success: function (data) {
                $orderDetails = data;
                $("[data-id="+ordermodalid+"]").val(orderId);
                $("[data-id="+ordermodalid+"]").parent().parent().find("#orderids").attr("value", $orderDetails[2]);
                $("[data-id="+ordermodalid+"]").parent().parent().find("#title").attr("value", $orderDetails[1]);
                $("[data-id="+ordermodalid+"]").parent().parent().find("#Customer").attr("value", $orderDetails[0]);
                $("[data-id="+ordermodalid+"]").parent().parent().parent().parent().find(".span-order").text(orderId);
            }
        });
    };
</script>

<script>
    // allowed maximum number of timesheetjobs
    var max_input = 8;
    // initialize the counter
    var x = 1;
    var index = 1;

        var tsModalMon = document.getElementById('tsModalMon');
        tsModalMon.addEventListener('show.bs.modal', function (event) {
            var datemon= $(".date-head-mon").text();
            var monthmon = $(".month-head-mon").text();
            var button = event.relatedTarget;
            var tsid = button.getAttribute('data-bs-id');
            var head = button.getAttribute('data-bs-date');

            $("#tsModalMonLabel").text("Monday, " + datemon + " " + monthmon); 
            $(".tsid").val(tsid);
            $("#tsModalMonLabel").text(head);

            $.ajax({
                type: "GET", //we are using GET method to get data from server side
                url: 'getTimesheetJobs.php', // get the route value
                data: {tsid:tsid}, //set data
                beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
                    
                },
                success: function (response) {//once the request successfully process to the server side it will return result here
                    console.log(response);
                    const obj = JSON.parse(response);
                    console.log(obj.length);
                    addTSjobs(obj);
                    order();
                }
            });
        });

        $('#tsModalMon').on('hide.bs.modal', function (e) {
            var tsid = $(".tsid").val();
            $.ajax({
                type: "GET", //we are using GET method to get data from server side
                url: 'deleteEmptyTimesheetJobs.php', // get the route value
                data: {tsid:tsid}, //set data
                beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
                    
                },
                success: function (response) {//once the request successfully process to the server side it will return result here
                    // console.log("done");
                }
            });

            x = 1;
            index = 1;
            $('.tsjobcard').remove();
        });

        function addTSjobs(response){
            $i = -1;
            if(response[0].length != 0){
                $('.wrapper-mon').find('.mon-empty').hide();
                while (x <= response[0].length) { // validate the condition
                    x++; // increment the counter
                    $i++;
                    $('.wrapper-mon').append(`
                        <div class="card mt-2 tsjobcard"   data-temp="`+parseInt(response[0][$i][4].split(':').join(''))+`" style="position: relative;border-radius: 15px;">
                            <div class="card-header btn btn-link collapsed expandform" id="monhead`+index+`" data-toggle="collapse" data-target="#mon`+index+`" aria-expanded="false" aria-controls="mon`+index+`" style="text-align: left; font-weight:500; color: #000000; text-decoration:none; margin-top: 0; margin-right: 0;
                                margin-left: 0;
                                box-shadow: 0;
                                border-radius: 0;background-color: rgba(0,0,0,.03);">
                                    <span class="span-order"> `+response[1][$i][0]+`  </span>
                                    <span style="color:grey;font-weight:light;font-size:0.8rem;" class="card-header-hours" id="card-header-hours"> `+ response[0][$i][3].toFixed(2) +` hrs                          
                                    </span>
                            </div>
                            <span class="btn btn-danger remove-btn-mon w-25" style="position: absolute;right: 0;padding: 0.5rem;border-radius: 15px;"> Delete</span>
                            <div id="mon`+index+`" class="collapse" aria-labelledby="monhead`+index+`" data-parent="#mon-order-accordion">
                                <div class="card-body">
                                <input type="hidden" class="form-control TimeSheetJobID" name="TimeSheetJobID[]" value="`+response[0][$i][0]+`"/>
                                <div class="form-group mb-3  ">
                                    <label for="orderno">Order Number</label>
                                    <input class="form-control" type="text" name="ordernos[]" data-id="ordernos`+index+`" data-toggle="modal" data-target="#OrderNoModal"  placeholder="Select Order Number" id="ordernos" style="background-color: #ffffff;"
                                    value="`+response[1][$i][0]+`" readonly/>
                                    <input type="hidden" class="form-control" id="orderids" name="orderids[]" value="`+response[0][$i][2]+`"/>
                                </div>

                                <div class="form-group mb-3  ">
                                    <label for="title">Order Description</label>
                                    <input type="text" class="form-control" id="title" name="title[]" value="`+response[1][$i][1]+`" placeholder="Enter Order Description" readonly/>
                                </div>

                                <div class="form-group mb-3  ">
                                    <label for="Customer">Customer</label>
                                    <input type="text" class="form-control" id="Customer" name="Customer[]" value="`+response[1][$i][2]+`" placeholder="Enter Customer" readonly/>
                                </div>
                                
                                <div class="form-row row mb-3">
                                    <div class="col">
                                        <label for="Start">Start Time</label>
                                        <input type="time" class="form-control startTime" id="startTime" name="startTime[]" value="`+response[0][$i][4]+`" step="00:15" pattern="[0-9]{2}:[0-9]{2}"></div>
                                    <div class="col">
                                        <label for="End">End Time</label>
                                        <input type="time" class="form-control endTime" id="endTime" name="endTime[]" value="`+response[0][$i][5]+`" step="00:15" pattern="[0-9]{2}:[0-9]{2}"> </div>
                                    <div class="err-time" style="color:red;display:none;font-weight: 600;">Error: End time cannot be less than start time!</div>
                                    <div class="err-time-conflict" style="color:red;display:none;font-weight: 600;">Error: Time conflict, try different time!</div>
                                </div>
                                <div class="form-group mb-3  ">
                                    <label for="notes">Notes</label>
                                    <textarea type="text" class="form-control" id="notes" name="notes[]" rows="2">`+response[0][$i][6]+`</textarea>
                                </div>
                                    <div class="btn btn-danger collapsed" data-toggle="collapse" data-target="#mon`+index+`" aria-controls="mon`+index+`">
                                        Close
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    `);
                    index++;
                }; 
            }
            else{
                $('.wrapper-mon').find('.mon-empty').show();
            } 
        };

    $('.add-btn-mon').click(function (e) {
      e.preventDefault();
      var tsid = $(".tsid").val();
      $.ajax({
                type: "GET", //we are using GET method to get data from server side
                url: 'addEmptyTimesheetJobs.php', // get the route value
                data: {tsid:tsid}, //set data
                beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
                    
                },
                success: function (response) {//once the request successfully process to the server side it will return result here
                    addtsj(response);
                }
        });

        function addtsj(response){
            response = parseInt(response);
            if (x < max_input) { // validate the condition
                x++; // increment the counter
                $('.mon-empty').hide();
                $('.wrapper-mon').append(`
                    
                    <div class="card mt-2 tsjobcard" data-temp="9999" style="position: relative;border-radius: 15px;">
                        <div class="card-header btn btn-link collapsed expandform" id="monhead`+index+`" data-toggle="collapse" data-target="#mon`+index+`" aria-expanded="false" aria-controls="mon`+index+`" style="text-align: left; font-weight:500; color: #000000; text-decoration:none; margin-top: 0; margin-right: 0;
                            margin-left: 0;
                            box-shadow: 0;
                            border-radius: 0;background-color: rgba(0,0,0,.03);">
                                <span class="span-order"> Timesheet Order </span>
                                <span style="color:grey;font-weight:light;font-size:0.8rem;" class="card-header-hours" id="card-header-hours">                           
                                </span>
                        </div>
                        <span class="btn btn-danger remove-btn-mon w-25" style="position: absolute;right: 0;padding: 0.5rem;border-radius: 15px;"> Delete</span>
                        <div id="mon`+index+`" class="collapse" aria-labelledby="monhead`+index+`" data-parent="#mon-order-accordion">
                            <div class="card-body">
                            <input type="hidden" class="form-control TimeSheetJobID" name="TimeSheetJobID[]" value="`+response+`"/>
                            <div class="form-group mb-3  ">
                                <label for="orderno">Order Number</label>
                                <input class="form-control" type="text" name="ordernos[]" data-id="ordernos`+index+`" data-toggle="modal" data-target="#OrderNoModal"  placeholder="Select Order Number" id="ordernos" style="background-color: #ffffff;"
                                value="<?php echo $OrderNo;?>" readonly/>
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
                                    <input type="time" class="form-control startTime" id="startTime" name="startTime[]" step="00:15" pattern="[0-9]{2}:[0-9]{2}"></div>
                                <div class="col">
                                    <label for="End">End Time</label>
                                    <input type="time" class="form-control endTime" id="endTime" name="endTime[]" step="00:15" pattern="[0-9]{2}:[0-9]{2}" disabled> </div>
                                <div class="err-time" style="color:red;display:none;font-weight: 600;">Error: End time cannot be less than start time!</div>
                                <div class="err-time-conflict" style="color:red;display:none;font-weight: 600;">Error: Time conflict, try different time!</div>
                            </div>
                            <div class="form-group mb-3  ">
                                <label for="notes">Notes</label>
                                <textarea type="text" class="form-control" id="notes" name="notes[]" rows="2"></textarea>
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
        }
    });

    $('#submit-mon').click(function (e) {

    var tsid = $(".tsid").val();
    var TimeSheetJobID = $('[name="TimeSheetJobID[]"]').serialize();
    var orderids = $('[name="orderids[]"]').serialize();
    var startTime = $('[name="startTime[]"]').serialize();
    var endTime = $('[name="endTime[]"]').serialize();
    var notes = $('[name="notes[]"]').serialize();

        $.ajax({
                type: "GET", 
                url: 'submitTimesheetDays.php', 
                data: {tsid:tsid, orderids:orderids, startTime:startTime, endTime:endTime, notes:notes, TimeSheetJobID:TimeSheetJobID}, //set data
                beforeSend: function () {},
                success: function (response) {
                    displayTimeRange();
                    displayTotalHours();
                    displaySumTotalHours();
                }
        });
    });

    // handle click event of the remove link
    $('.wrapper-mon').on("click", ".remove-btn-mon", function (e) {
      e.preventDefault();
      var TimeSheetJobID = $(this).parent('div').find(".TimeSheetJobID").val();
            if (confirm("Are you sure you want to delete this record?")) {
                $(this).parent('div').remove();
                // Ajax config
                $.ajax({
                    type: "GET", 
                    url: 'deleteTimesheetJobs.php', 
                    data: {TimeSheetJobID:TimeSheetJobID},
                    beforeSend: function () {},
                    success: function (response) {
                        displayTimeRange();
                        displayTotalHours();
                        displaySumTotalHours();
                        console.log(response);
                    }
                });
            }
      x--; // decrement the counter
    });

    function displayTimeRange(){
        var min = function(arr) {
            return arr.reduce(function(a, b) { return a <= b? a : b;});
        };
        var max = function(arr) {
            return arr.reduce(function(a, b) { return a <= b? b : a;});
        };
        var STarr = Array.from(document.getElementsByClassName('startTime'), e => e.getAttribute("value"));
        var ETarr = Array.from(document.getElementsByClassName('endTime'), e => e.getAttribute("value"));

        var tsid = $(".tsid").val();
        $modalTarget = document.querySelector("li[data-bs-id='"+tsid+"']");
             
        if(STarr.length >0){
            $($modalTarget).find(".time-head").html(tConvert(min(STarr)) + " - " + tConvert(max(ETarr)));
        }
        else{
            $($modalTarget).find(".time-head").html("-");
        }
    }

    function displayTotalHours(){
        var orderarr = Array.from(document.getElementsByName('orderids[]'), e => e.value);
        var hoursarr = Array.from(document.getElementsByClassName('card-header-hours'), e => e.innerText.split(' ')[0]);

        $totalHours = 0;
        if(hoursarr.length >0){
            for (let i = 0; i < hoursarr.length; i++) {
                if(orderarr[i]!='8102'){
                    $totalHours += parseFloat(hoursarr[i]);
                }
            }
        }
        var tsid = $(".tsid").val();
        $modalTarget = document.querySelector("li[data-bs-id='"+tsid+"']");
        $($modalTarget).find(".hours-head-span").html( $totalHours == 0 ? "- hrs" : $totalHours.toFixed(2) + " hrs");
    }

    function displaySumTotalHours(){
        var jobhoursarr = Array.from(document.getElementsByClassName('hours-head-span'), e => e.innerText.split(' ')[0]);
        $totalSumHours = 0;
        if(jobhoursarr.length >0){
            jobhoursarr.forEach((e) => {
                if(e != "-"){
                    $totalSumHours += parseFloat(e);
                }
            });
        }
        $(".total-hours").html( $totalSumHours == 0 ? "-" : $totalSumHours);
    }
</script>

<script>

    $(document).on('focus',".startTime", function() {}).on('blur',".startTime", function() {

        $roundTime = roundTime($(this).val());

        $(this).val($roundTime);
        $(this).attr("value",$roundTime);

        $(this).parent().parent().find(".endTime").attr("min",$roundTime);
        $(this).parent().parent().find(".endTime").attr("value",$roundTime);
        $(this).parent().parent().find(".endTime").removeAttr("disabled");
        
        $func2_time1 = $roundTime;
        $func2_time2 = $(this).parent().parent().find(".endTime").val();

        var func2_dtStart = new Date("7/20/2015 " + $func2_time1);
        var func2_dtEnd = new Date("7/20/2015 " + $func2_time2);
        var func2_diff = ((func2_dtEnd - func2_dtStart)/(1000*60*60)).toFixed(2);
        if(func2_diff<0){
            $(this).parent().parent().find(".err-time").show();
            $(this).parent().parent().parent().parent().parent().find("#card-header-hours").text("");
            $(this).addClass("err-box");
            $(this).parent().parent().find(".endTime").addClass("err-box");
        }
        else{ 
            $(this).parent().parent().find(".err-time").hide();
            $(this).parent().parent().parent().parent().parent().find("#card-header-hours").text(func2_diff +" Hrs");
            $(this).removeClass("err-box");
            $(this).parent().parent().find(".endTime").removeClass("err-box");
        }  
        $(this).parent().parent().parent().parent().parent().attr("data-temp", parseInt($func2_time1.split(':').join('')));
        
        order();

        if(checkOverlap() == true){
            $(this).parent().parent().find(".err-time-conflict").show();
        }
        else{
            $(this).parent().parent().find(".err-time-conflict").hide();
        }
        
    });  

    
    $(".wrapper-mon").on('change', '.endTime', function (e) {        
        e.preventDefault(); 
        
        $roundTime = roundTime($(this).val());
        $(this).val(roundTime($roundTime));
        $(this).attr("value",$roundTime);

        $func1_time1 = $(this).parent().parent().find(".startTime").val();
        $func1_time2 = roundTime($roundTime);

        var func1_dtStart = new Date("7/20/2015 " + $func1_time1);
        var func1_dtEnd = new Date("7/20/2015 " + $func1_time2);
        var func1_diff = ((func1_dtEnd - func1_dtStart)/(1000*60*60)).toFixed(2);;


        if(func1_diff<0){
            $(this).parent().parent().find(".err-time").show();
            $(this).parent().parent().parent().parent().parent().find("#card-header-hours").text("");
            $(this).parent().parent().find(".startTime").addClass("err-box");
            $(this).addClass("err-box");
        }
        else{ 
            $(this).parent().parent().find(".err-time").hide();
            $(this).parent().parent().parent().parent().parent().find("#card-header-hours").text(func1_diff +" Hrs");
            $(this).parent().parent().find(".startTime").removeClass("err-box");
            $(this).removeClass("err-box");
        }  
        
        
        if(checkOverlap() == true){
            $(this).parent().parent().find(".err-time-conflict").show();
        }
        else{
            $(this).parent().parent().find(".err-time-conflict").hide();
        }

    });

    function roundTime(time){
        $settime = new Date("7/20/2015 " + time);
        
        const roundToQuarter = date => new Date(Math.round(date / 9e5) * 9e5);
            $dt = roundToQuarter(new Date($settime));

            $hours = $dt.getHours();
            if ($hours < 10) { 
                $hours = '0' + $hours;
            }
            $minutes = $dt.getMinutes();
            if ($minutes < 10) { 
                $minutes = '0' + $minutes;
            }

            return  $hours + ":" + $minutes;
    }

    function checkOverlap(){
        const sT = $('[name="startTime[]"]');
        const eT = $('[name="endTime[]"]');
        var sTArr = [];
        var eTArr = [];
        var tem = [];

        if(sT.length >=2){
            for (let i = 0; i < sT.length; i++) {
                var temp = [];
                temp.push(parseInt($(sT[i]).val().split(':').join('')) , parseInt($(eT[i]).val().split(':').join('')));
                tem.push(temp);
            }
        }
        tem = tem.sort((a, b)=> a[0] - b[0])
        console.log(tem);

        var flag = false;
        if(tem.length >=2){
            for (i = 0; i < tem.length-1; i++){
                    var a1 = tem[i][0];
                    var a2 = tem[i][1];
                    var a3 = tem[i+1][0];
                    var a4 = tem[i+1][1];
                    // console.log(dateRangeOverlaps(a1,a2, a3, a4));
                    if(dateRangeOverlaps(a1,a2, a3, a4) == true){
                        flag = true;
                        break;
                    }
            }  
        }
        
        return flag;      
    }

    function dateRangeOverlaps(a_start, a_end, b_start, b_end) {
        if (a_start < b_start && b_start < a_end) return true; // b starts in a
        if (a_start < b_end   && b_end   < a_end) return true; // b ends in a
        if (b_start <  a_start && a_end   <  b_end) return true; // a in b
        return false;
    }

    let currentOrder = (a, b) => a.dataset.temp - b.dataset.temp;
    function order() {
    const ordered = [...document.getElementsByClassName('tsjobcard')].sort(currentOrder)
        ordered.forEach((elem, index) => {
            elem.style.order = index;
        })
    };

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
        $(".post-wall").on("scroll", function(e){
                if ($(".post-wall")[0].scrollHeight - $(".post-wall").scrollTop() <= $(".post-wall").outerHeight()){
                    if($(".post-item").length < $("#total_count").val()) {
                        var lastId = $(".post-item:last").attr("id");
                        getMoreData(lastId);
                    }
                }
        });
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
            beforeSend: function (){},
            success: function (data) {
                    $('.ajax-loader').hide();
                    $("#post-list2").append(data);
            }
        }); 
    }
</script>

<script>
    function tConvert(time) {
    time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

    if (time.length > 1) { // If time format correct
        time = time.slice (1);  // Remove full string match value
        time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
        time[0] = +time[0] % 12 || 12; // Adjust hours
    }
    return time.join (''); // return adjusted time or original string
    }
</script>
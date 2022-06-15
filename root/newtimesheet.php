<?php
    session_start();
    $_SESSION["TimesheetID"] = '-1';
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

<!-- <header class="header-transparent" id="header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:2px solid #0000001a">
				<div class="container-fluid">
					<a href="../index.php" class="navbar-brand m-1">
						<img src="../assets/img/logo.png" height="55" alt="AFA Systems">
					</a>

                    <a href="../logout.php">
                       <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-primary" style="margin-right:0.5rem;">
                    </a>
				</div>
			</nav>
</header>End Header -->

<!-- <div class="header menu-container ">
  <div class="container">
	<div class="navigation">
	 <form action="/action_page.php">
        <label for="fname" onclick="document.querySelector('.phone-screen').classList.remove('active')">First name:</label>
        <input type="text" id="fname" name="fname" value="John"><br>
        <input type="submit" value="Submit" >
    </form>
 
    </div>
  </div>
</div> -->
<!-- Navigation menu end -->
        
<!-- <div class="menu-btn">
    <div class="timesheet-detail"><span class="day-head">MONDAY</span></div>
  <a onclick="documentTrack('#');" href="#">Menu <i class="fa fa-chevron-down"></i></a>
</div>  -->

<div class="week-selection" >
    <div class="week-selection-container">
        <form id="Form1">
            <label>First Day of Week (Monday):</label>
            <input type="date" class="form-control" id="tsdate" name="tsdate" placeholder=""/></br>
            <label>Last Day of Week (Sunday):</label>
            <input type="date" class="form-control" id="endtsdate" placeholder="" disabled/></br>
            <input type="submit" class="btn btn-light weekBtn" name="action" value="Submit">
        </form>
    </div>
</div>

<div class="overlay"></div>

<div class="timesheet-header">
    <div class="timesheet-header-front">
        <div>Monday, May 2, 2022</div>
        <div style="margin-left: 5px;">&#10247;</div>
        <div>Sunday, May 8, 2022</div>
    </div>
</div>
<form id="timesheetForm" method="post" action="submitTimesheetForm.php" autocomplete="off" enctype="multipart/form-data">

<div class="timesheet-container" style="top:15%;left:0;">
    <ul class="list-group week-list">
        <li class="list-group-item day-list" data-bs-toggle="modal" data-bs-target="#tsModalMon" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
            <!-- head -->
            <span class="day-head" value="Monday">MONDAY</span>
            <!-- card content  -->
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head date-head-mon"> 21</span> 
                        <br>
                        <span class="month-head month-head-mon"> Jan 2021 </span>
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


        <li class="list-group-item day-list" data-bs-toggle="modal" data-bs-target="#tsModal" data-bs-whatever="hello">
        <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
        <span class="day-head" value="Tuesday">TUESDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head"> 21</span> 
                        <br>
                        <span class="month-head"> Jan 2021 </span>
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

        <li class="list-group-item day-list" data-bs-toggle="modal" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
            <span class="day-head" value="Wednesday">WEDNESDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head"> 21</span> 
                        <br>
                        <span class="month-head"> Jan 2021 </span>
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

        <li class="list-group-item day-list" data-bs-toggle="modal" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
            <span class="day-head" value="Thursday">THURSDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head"> 21</span> 
                        <br>
                        <span class="month-head"> Jan 2021 </span>
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


        <li class="list-group-item day-list" data-bs-toggle="modal" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
            <span class="day-head" value="Friday">FRIDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head"> 21</span> 
                        <br>
                        <span class="month-head"> Jan 2021 </span>
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

        <li class="list-group-item day-list" data-bs-toggle="modal" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
            <span class="day-head" value="Saturday">SATURDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head"> 21</span> 
                        <br>
                        <span class="month-head"> Jan 2021 </span>
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

        <li class="list-group-item day-list last-day-list" data-bs-toggle="modal" data-bs-target="#tsModal" data-bs-whatever="hello">
            <input type="hidden" id="TimesheetID" name="TimesheetDayID[]" value="-1">
            <span class="day-head" value="Sunday">SUNDAY</span>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-sm day-detail">
                        <span class="date-head"> 21</span> 
                        <br>
                        <span class="month-head"> Jan 2021 </span>
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
    <div class="modal fade animate" id="tsModalMon" tabindex="-1" role="dialog" aria-labelledby="tsModalMonLabel" aria-hidden="true">
        <div class="modal-dialog edit-modal-dialog">
                <div class="modal-content  animate-bottom">
                <div class="modal-header">
                    <h5 class="modal-title" id="tsModalMonLabel">Monday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3  ">
                        <label for="travelfrom">Travel From</label>
                        <input type="text" class="form-control" id="travelfrm1" name="travelfrom" placeholder="Enter Travel From" value="<?php echo $TravelFrom;?>"   />
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
                    <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="modal fade animate" id="tsModal" tabindex="-1" role="dialog" aria-labelledby="tsModalLabel" aria-hidden="true">
        <div class="modal-dialog edit-modal-dialog">
            <div class="modal-content  animate-bottom">
            <div class="modal-header">
                <h5 class="modal-title" id="tsModalLabel">Day</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3  ">
                    <label for="travelfrom">Travel From</label>
                    <input type="text" class="form-control" id="travelfrom" name="travelfrom" placeholder="Enter Travel From" value="<?php echo $TravelFrom;?>"   />
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
                <button type="button" class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>

<script>
      $(document).ready(function(){
        $(".menu-btn").on('click',function(e){
            e.preventDefault();
                
                //Check this block is open or not..
            if(!$(this).prev().hasClass("open")) {
                $(".header").slideDown(400);
                $(".header").addClass("open");
                $(this).find("i").removeClass().addClass("fa fa-chevron-up");
                $('.overlay').show();
            }
            
            else if($(this).prev().hasClass("open")) {
                $(".header").removeClass("open");
                $(".header").slideUp(400);
                $(this).find("i").removeClass().addClass("fa fa-chevron-down");
                $('.overlay').hide();
            }
        });
    });
</script>


<script>

    $(document).ready(function(){

        $("#tsdate").change(function () {
            var startdate = new Date($("#tsdate").val());
            startdate.setDate(startdate.getDate() - (startdate.getDay() - 1));
            
            var enddate = new Date(startdate);
            enddate.setDate(startdate.getDate() - (startdate.getDay() - 1)+6);
            // console.log(enddate);

            var startdateString = new Date(startdate.getTime() - (startdate.getTimezoneOffset() * 60000 )).toISOString().split("T")[0];
            var enddateString = new Date(enddate.getTime() - (enddate.getTimezoneOffset() * 60000 )).toISOString().split("T")[0];
            $("#tsdate").val(startdateString);
            $("#endtsdate").val(enddateString);;
        });
    });
    	
</script>

<script>
    $(function() {
        $(".weekBtn").on("click", function(e) {
            e.preventDefault();
            $(".week-selection").slideUp(1000, function(){
                var dts = $("#tsdate").val();
            // console.log(dts);
           
            $.ajax({
                type: "GET", //we are using GET method to get data from server side
                url: 'addtimesheet.php', // get the route value
                data: {dts:dts}, //set data
                beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
                    
                },
                success: function (response) {//once the request successfully process to the server side it will return result here
                    console.log(response);
                    // location.href = "http://www.example.com/ThankYou.html"
                    window.location.replace("updatetimesheet.php?id=" +response);
                     
                }
            });
            });
            
        });

        function callbackIDS(arr) {
        }
    });
</script>

<script>

var tsModal = document.getElementById('tsModal')
        tsModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever');
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
        var tsModalMon = document.getElementById('tsModalMon')
        tsModalMon.addEventListener('show.bs.modal', function (event) {
            var text = $(".month-head-mon").text();
            $("#tsModalMonLabel").text(text);
        });
        tsModalMon.addEventListener('hide.bs.modal', function (event) {
            var text = $("#travelfrm1").val();
            alert(text);
            $(".month-head-mon").text(text);
        });
</script>
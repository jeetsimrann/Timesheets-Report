<?php
// require_once("Login_Validate.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>AFA IntraNet</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/link.css">
        <link rel="stylesheet" href="css/jquery.smartmenus.bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./CSS/dataTables.min.css">
		<link rel="stylesheet" href="css/sweetalert.css"/>
		<script type="text/javascript" language="javascript" src="./JS/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="./JS/dataTables.min.js"></script>
		<script type="text/javascript" src="js/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="./CSS/jquery-ui.css">
		<script src="./JS/jquery-ui.js"></script>
		<script src="./JS/time.js"></script>
<style>
.timesheetTbl{
	width:100%;
}
.timesheetTbl th, td{
	text-align:center;
	padding:10px
}
.timesheetTbl #tasks input
{
    width:100%;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
}
.selected{
	background: #1967b1;
	color: #333;
	z-index: 2;
	border-bottom-color: #000;
}
#start_date{
	cursor:pointer;
}

.JobOrder{
	padding: 10px;
	border: #F0F0F0 1px solid;
	display:inline}
#JobEntry{
	padding-bottom:100px;
}

#TimeDpdn li{position:relative;z-index:2; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#TimeDpdn li:hover{background:#E0E0E0;cursor:pointer;}
#TimeDpdn{
	height:200px;width:205px;overflow-y:auto;padding:0px;display:block;position:relative;
}
</style>
<script>
  $(function() {
	  $( "#start_date" ).datepicker();
    $( "#start_date" ).datepicker("option","dateFormat","DD, d MM, yy");
  });
	function addOrder(OrderNo,CustName,OrderDesc,RegHrs,OTHrs,TimeSheetJobID){
		$(document).ready(function(){
			var numTasks = $("#tasks >tbody >tr").length - 1;//total number of current tasks
			if (numTasks < 10){
				if (TimeSheetJobID === "0"){
					var dayNum = $(".selected").attr("id").substr(-1);
					$.ajax({
						type: "POST",
						url: "addOrder.php",
						data:'TimesheetDayID=' + $('#TimesheetDayID' + dayNum).val(),
						async: false,
						success: function(data){
							var obj = $.parseJSON(data);
							if(obj.length > 0){
								var last = obj.length - 1;
								OrderNo = obj[last].OrderNo;
								CustName = obj[last].CustomerName;
								OrderDesc = obj[last].CustomerName;
								RegHrs = 0;
								OTHrs = 0;
								CustName = obj[last].CustomerName == null ? "" : obj[last].CustomerName;
								OrderDesc = obj[last].Title == null ? "": obj[last].Title;
								TimeSheetJobID = obj[last].TimeSheetJobID;
							}
							
						}
						
					});
				}
				TaskSeedNum = Number($("#curJobCount").val()); //seed number for task identifier
				$("#curJobCount").val(Number($("#curJobCount").val()) + 1)//increment seed holder
				
				order = "<tr id='JobRow" + TaskSeedNum + "' class='JobRow'><td><input type='text' class='JobOrder JobOrder" + TaskSeedNum + "' placeholder='Order Number' value='" + OrderNo + "' /><div id='suggestion-box" + TaskSeedNum + "' class='OrderDpdn' style='position:absolute;z-index:100'></div></td><td><input type='text' id='CustName" + TaskSeedNum + "' placeholder='Customer Name' value='" + CustName + "' disabled /></td><td><input type='text' id='OrderDesc" + TaskSeedNum + "' placeholder='Order Description' value ='" + OrderDesc + "' disabled /></td><td><select name='StartTime" + i + "' class='TimeDpdn StartTime" + i + "'>" + $("#TimeDpdn").html() + "</select></td><td><select name='EndTime" + i + "' class='TimeDpdn EndTime" + i + "'>" + $("#TimeDpdn").html() + "</select></td><td><input type='number' min='0' max='24' id='RegHrs" + TaskSeedNum + "' value='" + RegHrs + "' class='RegHrs' disabled /></td><td><input type='number' min='0' max='24' id='OTHrs" + TaskSeedNum + "' value='" + OTHrs + "' class='OTHrs' disabled /></td><td><button onclick='DeleteOrder(" + TaskSeedNum + ")'>Delete</button></td><input type='hidden' id='JobID" + TaskSeedNum + "' value='" + TimeSheetJobID + "' /></tr>";
				
				$("#tasks").append(order);
			}else{
				$("#addOrderBtn").prop("disabled","true");
				swal("You cannot add any more orders ");
			}
		});
	}
	function DeleteOrder(orderIndex){
		$.ajax({
		type: "POST",
		url: "deleteOrder.php",
		data:'TimeSheetJobID=' + $('#JobID' + orderIndex).val()
		});
		$("#JobRow" + orderIndex).remove();
		setTotalHrs();
		$("#addOrderBtn").removeProp("disabled");
	}	
  $(document).ready(function(){
	  $("#start_date").on("change", function(){
		  setDays(true);
	  });
		  
	function setDays(initalize){
       var date = new Date($("#start_date").val()),
           days = 6;
		//set start date to be the monday of the selected week
		if(date.getDay() == 0){
			date.setDate(date.getDate() - 6);
			
		}
		else{
			date.setDate(date.getDate() - (date.getDay() - 1));
		}
		$("#dateformat").val(date.getFullYear().toString() + "-" + (date.getMonth() + 1).toString() + "-" + date.getDate().toString());
		$("#start_date").val(date.toInputFormat());
		
		for(i=0 ; i<7 ; i++){
			$("#day" + i).val(date.toInputFormat());
			date.setDate(date.getDate() + 1);
		}
		
		//set the end date of the week
        if(!isNaN(date.getTime())){
            date.setDate(date.getDate() - 1);

            $("#end_date").val(date.toInputFormat());
        } else {
            alert("Invalid Date");  
        }
		$.ajax({
		type: "POST",
		url: "timesheetsDays.php",
		data:'dateformat='+$("#dateformat").val() + '&employeeID=' + $("#employeeID").val(),
		success: function(data){
			var obj = $.parseJSON(data);
			for(i=0; i < obj.length ; i++){
				$("#TimesheetDayID" + i).val(obj[i].TimesheetDayID);
				$("#totalHrs" + i).val(obj[i].TotalHrs);
			}
			
		}
		});
		$("#showWeek").css("display","block");
		if(initalize){
			$(".dayRow").removeClass("selected");
			$("#JobEntry").empty();
		}
	  };
	  //action when a day is selected
	  $(".dayRow").click(function(e) {
		  if(!$(this).hasClass("selected")){
			  $(".dayRow").removeClass("selected");
			  $(this).addClass("selected");
			  var dayNum = $(this).attr("id").substr(-1);
			  var TimesheetDayID = $("#TimesheetDayID" + dayNum).val();
			  showJobs(TimesheetDayID);
		  }
	});
	
	function showJobs(TimesheetDayID){
		$.ajax({
			type: "POST",
			url: "timesheetsJobs.php",
			data:'TimesheetDayID=' + TimesheetDayID,
			success: function(data){
				var obj = $.parseJSON(data);
				var order = " ";
				$("#JobEntry").empty();
				$("#JobEntry").html("<table id='tasks' class='timesheetTbl table'><tr><th>Order</th><th>Customer Name</th><th>Order Description</th><th>Start</th><th>End</th><th>Reg Hours</th><th>OT Hours</th><th></th></tr>");
				$("#curJobCount").val("0");
				if(obj != null){
					for(i=0; i < obj.length ; i++){
						hourTotals = hours(obj[i].StartTime,obj[i].EndTime);//returns regular and overtime hours
						addOrder(obj[i].OrderNo,(obj[i].CustomerName == null ? "" : obj[i].CustomerName),(obj[i].Title == null ? "": obj[i].Title),hourTotals[0],hourTotals[1],obj[i].TimeSheetJobID);
						if(obj[i].StartTime !== false){
							if(obj[i].StartTime !== "12:00 PM"){
								$(".StartTime" + i).children().each(function(){
									$(this).removeAttr("selected");
									if($(this).attr("class") == obj[i].StartTime)
										$(this).attr("selected",true); 
								});
							}
							
						}
						if(obj[i].EndTime !== false){
							if(obj[i].EndTime !== "12:00 PM"){
								$(".EndTime" + i).children().each(function(){
									$(this).removeAttr("selected"); 
									if($(this).attr("class") == obj[i].EndTime)
										$(this).attr("selected",true); 
								});
							}
							
						}
					}
				}
				$("#JobEntry").append("<button id='addOrderBtn' onclick='addOrder(\"\",\"\",\"\",\"0\",\"0\",\"0\")'>Add Order</button><br/><br/>");
				
			}
			});
	}
	
	$('#JobEntry').on("click",".TimeDpdn",function() {
		$(this).data('lastSelected', $(this).find('option:selected'));
	});
	$("#JobEntry").on("change",".TimeDpdn",function(e){
		 var curIndex = $(this).attr("name").substr(-1);
		 var JobOrder = $(".JobOrder" + curIndex).val();
		 var valid = "No";
		 $.ajax({
				type: "POST",
				url: "validateJobEntry.php",
				data:'JobOrder=' + JobOrder,
				async: false,
				success: function(data){
					valid = data;
				}
				});
		 
		if(valid === "Yes"){
			if(timeSpan($(".StartTime" + curIndex).val(),$(".EndTime" + curIndex).val()) == -1){
				$(this).data('lastSelected').prop('selected', true);
				swal("End cannot be less than start time!");
			 }else{
				 hourTotals = hours($(".StartTime" + curIndex).val(),$(".EndTime" + curIndex).val());//returns regular and overtime hours
				 $("#RegHrs" + curIndex).val(hourTotals[0]);
				 $("#OTHrs" + curIndex).val(hourTotals[1]);
				 var h1 = parseFloat(hourTotals[0]) + parseFloat(hourTotals[1])
				 var TimeSheetJobID = $("#JobID" + curIndex).val();
				 var dayNum = $(".selected").attr("id").substr(-1);
				 var TimesheetDayID = $("#TimesheetDayID" + dayNum).val();
				 $.ajax({
					type: "POST",
					url: "timesheetsUpdateHours.php",
					data:'hourTotals=' + h1 + '&TimeSheetJobID=' + TimeSheetJobID + '&TimesheetDayID=' + TimesheetDayID + '&StartTime=' + $(".StartTime" + curIndex).val() + '&EndTime=' + $(".EndTime" + curIndex).val(),
					async:false,
					success: function(){
						showJobs(TimesheetDayID);
					}
				});
				setTimeout(setTotalHrs,100);

			 }
		}else{
			$(this).data('lastSelected').prop('selected', true);
			swal("Choose a valid order before setting time");
		}
		 
	});

	$("#JobEntry").on("focus",".JobOrder",function(){
		$(".JobOrder").removeClass("OrderSearch");
		$(".JobOrder").removeAttr("ID");
		$(this).addClass("OrderSearch");
		$(this).attr("id","search-box");
		
	});
	$("#JobEntry").on("input","#search-box",function(){
		var suggestionBox = $(this).siblings(".OrderDpdn").attr("ID");
		$.ajax({
		type: "POST",
		url: "CustomerList.php",
		data:'keyword='+$("#search-box").val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(./gifs/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#" + suggestionBox).html(data);
			if($("#temp_Li0").length > 0){
				if($("#temp_Li1").length<=0 && document.getElementById('temp_Li0').innerHTML.toUpperCase() === document.getElementById('search-box').value.toUpperCase()){
					$("#temp_Li0").trigger("click");
				}else{
					$("#" + suggestionBox).show();
					$(".JobOrder").not("#search-box").each(function(){
						$(this).attr("disabled","disabled");
					});
					
				}
			}
			$("#search-box").css("background","#FFF");
		}
		});
	});
	
  });
  
  function setTotalHrs(){
	  var totalHrs = 0;
	  
	 $(".RegHrs").each(function(){
		 var curIndex = $(this).attr("id").substr(-1);
		 if ($(".JobOrder" + curIndex).val() != "IN-1010")
			totalHrs += parseFloat($(this).val());
	 });
	 $(".OTHrs").each(function(){
		 var curIndex = $(this).attr("id").substr(-1);
		 if ($(".JobOrder" + curIndex).val() != "IN-1010")
			totalHrs += parseFloat($(this).val());
	 });
	 var dayNum = $('.selected').attr("id").substr(-1);
	 $("#totalHrs" + dayNum).val(totalHrs);
  }
  
  function selectOrder(OrderId,OrderNo,CustomerName) {
	   
	 var suggestionBox = $("#search-box").siblings(".OrderDpdn").attr("ID"); 
	 var curIndex = suggestionBox.substr(-1);
	 var TimeSheetJobID = $("#JobID" + curIndex).val();
	//$("#OrderId").val(OrderId);
	$("#search-box").val(OrderNo);
	$("#CustName" + curIndex).val(CustomerName);
	$("#" + suggestionBox).hide();
	$(".JobOrder").removeAttr("disabled");
	
	//set Order Description field
	var dayNum = $(".selected").attr("id").substr(-1);
	var TimesheetDayID = $("#TimesheetDayID" + dayNum).val();
	  $.ajax({
		type: "POST",
		url: "timesheetsGetOrderDesc.php",
		data:'OrderID=' + OrderId + '&TimeSheetJobID=' + TimeSheetJobID,
		success: function(data){
			$("#OrderDesc" + curIndex).val(data);
		}
		});
	
	}
	
	
	
  Date.prototype.toInputFormat = function() {
	   var days = ["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
	   var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
       var yyyy = this.getFullYear().toString();
       var mm = months[this.getMonth()].toString();
       var DD  = days[this.getDay()].toString();
	   var d = this.getDate();
       return DD + ", " + d + " " + mm + ", " + yyyy ; // padding
    };
  </script>
</head>

<body>

<?php include("include-top.php"); ?>
<div class="padding_zero slider-bg col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="slider_my padding_main">

        <h2 style="text-align:center">Time Sheets</h2>
		<input type='hidden' id='curJobCount' />
<?php
require_once("dbConnect.php");
$db_handle = new DBController();
$query = "SELECT tblEmployee.EmployeeID, [FirstName]+' '+[LastName] AS Employee FROM tblDepartments RIGHT JOIN tblEmployee ON tblDepartments.DeptID = tblEmployee.DeptID WHERE [FirstName]+' '+[LastName] = '" . $_SESSION['Name'] . "' ORDER BY [FirstName]+' '+[LastName]";
$result = $db_handle->runQuery($query);
if(sizeof($result) != 1){
	echo "<p style='color:red'>There is a problem with your user account. Please contact your network administrator</p>";	
}
?>

<table>
   <tr><td>First Day of Week (Monday): </td><td><input type="text" style="position: relative; z-index: 100000;" id="start_date" name="start_date" readonly="true" ></td></tr>
   <tr><td>Last Day of Week (Sunday): </td><td><input type="text" id="end_date" disabled ></td></tr>
</table>
<input type="hidden" name="dateformat" id="dateformat" />
<input type="hidden" name="employeeID" id="employeeID" value="<?php echo $result[0]['EmployeeID']; ?>" />
	<div style="display:none" id="showWeek">
   <table id="weekDays" class="timesheetTbl"><tr><th>Date</th><th>Total</th></tr>
   <?php
	for($i = 0; $i<7; $i++){
		echo "<tr class='dayRow' id='weekRow" . $i . "'>
		<td><input type='text' class='curDay' id='day" . $i . "' disabled /></td>
		<td><input type='number' min='0' max='24' id='totalHrs" . $i . "' disabled /></td>
		<input type='hidden' id='TimesheetDayID" . $i . "' />
		</tr>
		";
	}
   ?>
  
   </table>
   </div>
   
 <div id="JobEntry" class="table-responsive">
</div>
<div  id='TimeDpdn' style="display:none;">
<?php
$minutes = array("00","15","30","45");
for($i = 1; $i <=12 ; $i++){
	for($j = 0 ; $j < 4 ; $j++){
		$suffix = "AM";
		$selected = "";
		if($i == 12){
			$suffix = "PM";
			if($j == 0)
				$selected = "selected";
		}
		$time = "$i:$minutes[$j] $suffix";
		echo "<option class='$time' value='$time' $selected>$time</option>";
	}
}
for($i = 1; $i <=12 ; $i++){
	for($j = 0 ; $j < 4 ; $j++){
		$suffix = "PM";
		if($i == 12){
			$suffix = "AM";
		}
		$time = "$i:$minutes[$j] $suffix";
		echo "<option class='$time' value='$time'>$time</option>";
	}
}
?>
</div>
   </div>
</div>

<?php include("include-bottom.php"); ?>	
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Service Report Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />

<style>
html, body{
    height: 100vh;
    background: rgb(13,110,253);
    background: linear-gradient(153deg, rgba(13,110,253,1) 0%, rgba(157,196,255,1) 36%, rgba(228,239,255,1) 63%);
}
</style>
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


<div class="container" style="position: relative;
  width: 100%;
  max-width: 960px;
  min-height: 100%;
  margin: 0px auto;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;">
	
<!-- <div class="timesheet-header">
    <div class="timesheet-header-front">
        <div>Monday, May 2, 2022</div>
        <div style="margin-left: 5px;">&#10247;</div>
        <div>Sunday, May 8, 2022</div>
    </div>
</div> -->

	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">21</h1>
			<p class="title">Jan 2022</p>
			<span class="atomic-number">Monday</span>
			<span class="atomic-mass">8 Hrs</span>
		</div>
		<div class="back-facing">
			<p>Copper is a chemical element with symbol Cu (from Latin: cuprum) and atomic number 29. It is a soft, malleable, and ductile metal with very high thermal and electrical conductivity.</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Copper" target="_blank">More info</a></p>
		</div>
	</div>
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Ag</h1>
			<p class="title">Silver</p>
			<span class="atomic-number">47</span>
			<span class="atomic-mass">107.86</span>
		</div>
		<div class="back-facing">
			<p>Silver is the metallic element with the atomic number 47. Its symbol is Ag, from the Latin argentum, derived from the Greek ὰργὀς, and ultimately from a Proto-Indo-European language root reconstructed as *h2erǵ-, "grey" or "shining".</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Silver" target="_blank">More info</a></p>
		</div>
	</div>
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Au</h1>
			<p class="title">Gold</p>
			<span class="atomic-number">79</span>
			<span class="atomic-mass">196.97</span>
		</div>
		<div class="back-facing">
			<p>Gold is a chemical element with symbol Au and atomic number 79. In its purest form, it is a bright, slightly reddish yellow, dense, soft, malleable, and ductile metal. Chemically, gold is a transition metal and a group 11 element.</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Gold" target="_blank">More info</a></p>
		</div>
	</div>
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Rg</h1>
			<p class="title">Roentgenium</p>
			<span class="atomic-number">111</span>
			<span class="atomic-mass">282</span>
		</div>
		<div class="back-facing">
			<p>Roentgenium is a chemical element with symbol Rg and atomic number 111. It is an extremely radioactive synthetic element (an element that can be created in a laboratory but is not found in nature).</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Roentgenium" target="_blank">More info</a></p>
		</div>
	</div>

    <div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Rg</h1>
			<p class="title">Roentgenium</p>
			<span class="atomic-number">111</span>
			<span class="atomic-mass">282</span>
		</div>
		<div class="back-facing">
			<p>Roentgenium is a chemical element with symbol Rg and atomic number 111. It is an extremely radioactive synthetic element (an element that can be created in a laboratory but is not found in nature).</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Roentgenium" target="_blank">More info</a></p>
		</div>
	</div>

    <div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Rg</h1>
			<p class="title">Roentgenium</p>
			<span class="atomic-number">111</span>
			<span class="atomic-mass">282</span>
		</div>
		<div class="back-facing">
			<p>Roentgenium is a chemical element with symbol Rg and atomic number 111. It is an extremely radioactive synthetic element (an element that can be created in a laboratory but is not found in nature).</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Roentgenium" target="_blank">More info</a></p>
		</div>
	</div>

    <div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Rg</h1>
			<p class="title">Roentgenium</p>
			<span class="atomic-number">111</span>
			<span class="atomic-mass">282</span>
		</div>
		<div class="back-facing">
			<p>Roentgenium is a chemical element with symbol Rg and atomic number 111. It is an extremely radioactive synthetic element (an element that can be created in a laboratory but is not found in nature).</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Roentgenium" target="_blank">More info</a></p>
		</div>
	</div>
	
</div>

</body>
</html>

<!-- <script>
  $(document).ready(function() {
        var editModal = document.getElementById('editModal')
        editModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = editModal.querySelector('.modal-title')
        var modalBodyInput = editModal.querySelector('.modal-body input')

        modalTitle.textContent = 'New message to ' + recipient
        modalBodyInput.value = recipient
        })
        
    } );
  </script> -->

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
        $(".container").hide();
        $(".weekBtn").on("click", function(e) {
            e.preventDefault();
            $(".week-selection").slideUp(1000, function(){
                $(".overlay").hide();
                $(".container").show();
            });
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
                    // Cookies.set("elID", response, { expires: 7, path: '/' });
                    // $honey = response;
                    // addEL(response);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.element-card').on('click', function(){
            
            if ( $(this).hasClass('open') ) {
                $(this).removeClass('open');
                setTimeout(function(){
                    $('.element-card').show();
                },500); 
            } else {
                $('.element-card').removeClass('open');
                $('.element-card').hide();
                $(this).show();
                $(this).addClass('open');
                
            }
	    });
    });
</script>
<?php
session_start();
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

 <!-- lightbox -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

 <!-- Bootstrap CDN -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <!-- Bootstrap CDN -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" charset="utf-8" src="../assets/vendor/js.cookie.js"></script>

</head>

<body>

<?php require 'getSRDetails.php'; ?>
<?php require 'sp_qryCustOrderService.php'; ?>

<header class="header-transparent" id="header">
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
</header><!-- End Header -->
<?php
            // perform actions for each file found
            // foreach (glob("../uploads/expenselines/10912 13.*") as $filename) {
            //     if (file_exists($filename)) {
            //         echo "The file $filename exists";
            //         echo "<img src='".$filename."' style='width:100px;height:100px'>";
            //     } else {
            //         echo "The file $filename does not exist";
            //     }
            // }
            
        ?>
<div class="submitmain">
<form id="fupForm" method="post" action="sp_tblService_NewItem.php" autocomplete="off" enctype="multipart/form-data">=

        <div class="form-group mb-3  ">
            <label for="orderno">Order Number</label>
            <input class="form-control" name="ordernos" data-toggle="modal" data-target="#OrderNoModal"  placeholder="Select Order Number" id="ordernos" readonly style="background-color: #ffffff;"
            value="<?php echo $OrderNo;?>"/>
        </div>

<div class="orderlist" style="border: 2px solid grey; border-radius: 10px; padding: 1rem;">
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
                                            <p class="post-title">
                                                <input type="radio" class="form-check-input me-1" name="orderno" value="<?php echo $row['OrderNo']; ?>">
                                                <?php echo $row['OrderNo']; ?>
                                                <span style="color:grey;font-weight:light;font-size:0.8rem;">
                                                    <?php echo " ".$row['CustomerName']; ?>
                                                </span>
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


        <div class="formbutton mt-3">
            <input type="submit" name="exit" class="btn btn-primary submitBtn" value="Save & Exit" style="height:2.6rem;margin-right: 10px;"/>
            <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Submit" style="height:2.6rem"/>
        </div>
        <div id="alert_message" class="mt-2"></div>
</form>
</div>

</body>
</html>




<script>
    $(".orderlist").hide();
    $("#ordernos").click(function(){
        $(".orderlist").toggle();
    });

    $(document).ready(function(){
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
        	   }, 1000);
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
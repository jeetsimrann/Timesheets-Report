<?php 
    $mainID = $_POST['mainID'];
    
    $tsid = $_POST['tsid'];
    $oid = $_POST['title'];
    echo "<script>alert(".$oid[0].")</script>";
    // header("Location: /timesheets/root/updatetimesheet.php?id=".$mainID, true, 301);
    // echo "<script>
    //     window.location.replace('/timesheets/root/updatetimesheet.php?id='".$mainID.");
    // </script>";
    echo "<script> 
             window.history.go(-1);
     </script>";
    exit();
?>
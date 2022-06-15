<?php	
session_start();
    if(isset($_SESSION['userLoginStatus'])==0){
        header('Location:../index.php');
    }                                                                    
?>

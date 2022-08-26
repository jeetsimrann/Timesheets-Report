<?php	
    // code checks if user is loggedIN
    
    // session started 
    session_start();

    // redirect to login page if not logged in 
    if(isset($_SESSION['userLoginStatus'])==0){
        header('Location:../index.php');
    }                                                                    
?>

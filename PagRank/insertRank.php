<?php
    include "DB_Rank.php";

    $user = "FatCEO";
    $img = "/xampp/htdocs/FantaCrash/PagRegole/img/Profile/Ballerini_L_LG.png";
    $punti = 0 ;


    if(isset($user)){
        unset($_SESSION['error']);
        $_SESSION['error'] = insertdata($user, $img, $punti);
    }
    
    echo " ".$user." ".$img." ".$punti; 
?>
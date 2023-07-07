<?php
    include "/xampp/htdocs/FantaCrash/pagine.php";
    //include "/xampp/htdocs/Project_pHp/FantaCrash/pagine.php";
    
    include "DB_Address.php"; 
    
    if( !isset($_SESSION["online"]) || $_SESSION["online"] == false){
        AccessPage();
        }
    else if($_SESSION["pass"] != "TWF4QWRtaW5pc3RyYXRvcg=="){
        AccessPage();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    if( isset($_SESSION['error']))
    echo($_SESSION['error']);
    ?>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <meta charset="UTF-8">
    <title>Control_Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="../FantaCrash/PagRegole/img/Loghi/Nanoso_Limited.png">
</head>

<style> 
    body{
        background-color: grey;
    }

    #panel1{
        background-color: darkslategrey;
        height: 800px;
        width: 1600px;
        }

    #userID{
        background-color: black;
        height: 50px;
        width: 200px;
        margin-top: -20px;
    }

    #pannelloCtrl{
        text-align: center;
    }

    #panel2{
        background-color: black;
        height: 760px;
        width: 1140px;
        margin-left: 20px;
    }
</style>

<body>
    <div id="panel1" class=" rounded shadow-lg position-absolute top-50 start-50 translate-middle border border-light">
        <div id="userID" class="roounded shadow-lg position-absolute top-0 start-50 translate-middle border border-light text-light">
            <h3 id="pannelloCtrl">ADMIN-PAGE</h3>
        </div>
        <embed type="text/php" src="../PagRegole/CardAdmin.php" width="400px" height="760px" class="border border-white text-dark rounded mt-3 position-absolute end-0" style="background-color: #483c32; margin-right: 20px;">
            <div class="text-light">
                <embed id="panel2" class="border border-white text-dark rounded mt-3 position-absolute start-0" src="AccessLog.php" type="text/php">
           </div>
</body>

</html>
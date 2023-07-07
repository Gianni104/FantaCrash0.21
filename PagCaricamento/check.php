<?php
    include "/xampp/htdocs/FantaCrash/pagine.php";
    //include "/xampp/htdocs/Project_pHp/FantaCrash/pagine.php";
       session_start();

        if( !isset($_SESSION["online"]) || $_SESSION["online"] == false){
            AccessPage();
            }
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <meta charset="UTF-8">
    <title>Caricamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="CssCode.css">
    <link rel="icon" href="/FantaCrash/PagRegole/img/Loghi/Nanoso_Limited.png">
</head>
<body class="d-flex justify-content-center align-items-center">
     
    <div class="container-fluid cont1 rounded shadow-lg position-absolute top-50 start-50 translate-middle border border-light">

        <div class="position-absolute top-50 start-50 translate-middle btn btn-black border border-light text-light" style="margin-top: -170px; background-color: black;"><marquee>PUPPAMI LA FAVA E LEVATI</marquee></div>

    </div>

    <div class="container-fluid text-center align-items-center  pb-4 mb-4 ms-5 ps-">
        <div class="spinner-border text-white ms-4 ps-4 " role="status" style="margin-right: 70px;">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
      </script>
      
      <script>

        function redirect()
        {
        setTimeout(function () {
            //window.location.replace('http://gdp.kozow.com/FantaCrash/PagRegole');
            window.location.replace('http://127.0.0.1/FantaCrash/PagRegole');
        }, 3000);
    }

    redirect();

     </script>
   
</body>


</html>
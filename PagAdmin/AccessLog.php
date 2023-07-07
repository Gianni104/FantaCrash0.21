<?php
    include "/xampp/htdocs/FantaCrash/pagine.php";
    //include "/xampp/htdocs/Project_pHp/FantaCrash/pagine.php";
?>

<?php 
    include "DB_Address.php";
    
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Card</title>
    <style>

        .inputImg:hover{
            transform: scale(1.1);
        }

        input[type="file"] {
            display: none;
        }

        .col{
            text-align: center;
        }
    </style>
</head>

<body>   
    <ul class="list-group list-group-flush">
        <li class="list-group-item ">
            <div class="row align-items-start">
                <div class="col">
                    ID
                </div>
                <div class="col">
                    Username
                </div>
                <div class="col">
                    Password
                </div>
                <div class="col">
                    Time
                </div>
                <div class="col">
                    IP Address
                </div>
                <div class="col">
                    Info
                </div>
            </div>
        </li>
        <?php
            $records = getdata();

            if(isset($records ))
            {
               foreach( $records as $row ) {
                echo('<li class="list-group-item ">');
                echo('<div class="row align-items-start">');
                echo('<div class="col">');
                echo($row->id);
                echo('</div>');
                echo('<div class="col">');
                echo($row->user);
                echo('</div>');
                echo('<div class="col">');
                echo($row->PassW);
                echo('</div>');
                echo('<div class="col">');
                echo($row->orario);
                echo('</div>');
                echo('<div class="col">');
                echo($row->indirizzo);
                echo('</div>');
                echo('<div class="col">');
                echo($row->info);
                echo('</div>');
                echo('</div>');
                echo('</li>');
               }
            }
        ?>
    </ul>



    
</body>

<?php

    echo('</ul>');
?>

<?php
   if( isset($_SESSION['error']))
   echo($_SESSION['error']);
?>
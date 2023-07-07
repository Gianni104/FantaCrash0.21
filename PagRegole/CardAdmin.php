<?php
    include "/xampp/htdocs/FantaCrash/pagine.php";
    //include "/xampp/htdocs/Project_pHp/FantaCrash/pagine.php";
    session_start();

        if( !isset($_SESSION["online"]) || $_SESSION["online"] == false){
            AccessPage();
            }
?>

<?php 

include "db.php";

   if(isset($_POST["submit"]))
    {
       $DeleteID = $_POST["deleted"];
    }

    unset($_POST["submit"]);
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

        
    </style>
</head> 

<?php
   if( isset($_SESSION['error']))
   echo($_SESSION['error']);
?>

<body style="overflow-x: hidden; background-color: #483c32;">

    <div class="container-fluid d-flex justify-content-center align-content-center sticky-top" style="background-color: #483c32;">
        <form class="m-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-3 mt-1 p-0 ms-auto">
                    <button type="submit" value="Upload" name="submit" class="btn btn-dark rounded-circle p-2 mt-2 border border-white"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/></svg> </button>
                    <button type="submit" value="Upload" name="submit" class="btn btn-dark rounded-circle p-2 mt-2 border border-white"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/> </svg> </button>
                </div>
                <div class="col-9 d-flex justify-content-center align-content-center">
                    <textarea name="deleted" class="form-control rounded bg-body-secondary"  style="resize: none;" placeholder="Descrizione Incidente.."></textarea>
                </div>
            </div>
            
        </form>
    </div>

    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
    <?php
        
        $records = getdata();
        $message = "Non è possibile eliminare questo report";
        $i = 0;

        if(isset($records ))
        {
           foreach( $records as $row ) {
               
           
            echo('<div class="card text-white border border-white text-center mt-4" style="background-color: #483c32; height: 400px; width: 300px;">');
            echo('<img src="data:image/jpeg;base64,'. $row->IMG . '" class="card-img-top rounded" style="height: 250px; width: 298px;" >');
            echo('<div class="card-body border border-white">');
            echo('<h5 class="card-title">'."Autore: ".$row->UserID.'</h5>');
            echo('<p class="card-text">'.$row->Descrizione.'</p>');
            echo('<form method="post">');
            echo('<button class="rounded" style="width: 50px; height: 30px">'.$row->id.'</button>');
            echo('</form>');
            echo('</div>');
            echo('</div>');

           }
        }

        if(isset($DeleteID)){
            if($DeleteID == 1){
                echo "<script>alert('$message');</script>";            }
            else{
                deletedata($DeleteID);
            }
            
        } 
            
    ?>
    </div>
</body>

</html>
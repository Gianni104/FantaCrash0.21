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
        if( isset($_FILES["fileToUpload"]["tmp_name"]) && !empty($_FILES["fileToUpload"]["tmp_name"]) && (isset($_POST["fileDesc"]) && !empty($_POST["fileDesc"])))
        {
            unset($_SESSION['error']);
            $target_file = ($_FILES["fileToUpload"]["tmp_name"]);
            $_SESSION['error'] = insertdata( uniqid(), base64_encode(file_get_contents( $target_file)), $_POST["fileDesc"], $_SESSION["nome"]);
        }
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

<body class="bg-danger" style="overflow-x: hidden;">

    <div class="container-fluid d-flex justify-content-center align-content-center sticky-top bg-danger">
        <form class="m-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-3 mt-1 p-0 ms-auto">
                    <input id="file-upload" type="file" name="fileToUpload" id="fileToUpload" required/>
                    <label for="file-upload" id="inputImg-label" for="inputImg" class="text-dark bg-dark inputImg rounded-circle border border-white p-2 text-white" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16"> <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/> <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/> </svg> </label>
                    <button type="submit" value="Upload" name="submit" class="btn btn-dark rounded-circle p-2 mt-2 border border-white"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/> </svg> </button>
                </div>
                <div class="col-9 d-flex justify-content-center align-content-center">
                    <textarea name="fileDesc" class="form-control rounded bg-body-secondary"  style="resize: none;" placeholder="Descrizione Incidente.."></textarea>
                </div>
            </div>
            
        </form>
    </div>

    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
    <?php
        
        $records = getdata();

        if(isset($records ))
        {
           foreach( $records as $row ) {
               
           
            echo('<div class="card text-white border border-light display-fluid text-center mt-4 bg-warning" style=" width: 300px;">');
            echo('<img src="data:image/jpeg;base64,'. $row->IMG . '" class="card-img-top rounded" style="height: 250px; width: 298px;" >');
            echo('<div class="card-body border border-white text-black">');
            echo('<h5 class="card-title">'."Autore: ".$row->UserID.'</h5>');
            echo('<p class="card-text">'.$row->Descrizione.'</p>');
            echo('</div>');
            echo('</div>');

           }
        }
    ?>
    </div>
</body>
</html>
<?php
   if (isset($_SESSION['last_request_uri']) && $_SESSION['last_request_uri'] !== $_SERVER['REQUEST_URI']) {
    session_destroy();
    session_start();
    }

   unset($_SESSION["online"]);
   unset($_SESSION["error"]);

   include "/xampp/htdocs/FantaCrash/pagine.php";
   //include "/xampp/htdocs/Project_pHp/FantaCrash/pagine.php";
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="/FantaCrash/PagRegole/img/Loghi/Nanoso_Limited.png">
</head>

<style>

    .blinking-dot {
        width: 5px;
        height: 5px;
        background-color: white;
        animation: blink 500ms infinite;
        margin-left: 100px;
        margin-top: 45px;
    }

    @keyframes blink {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .cont1{
        background-color: black;
        width: 400px;
        height: 500px;
    }

    body{
        background-color: #142121;
        color: white;
        font-family: Courier New;
    }

    form{
        margin-top: 150px;
    }

    h2{
        width: max-content;
    }

</style>

<body class="fw-bold">
    <div class="container-fluid cont1 rounded shadow-lg position-absolute top-50 start-50 translate-middle border border-light">
        
        <table style="text-align: center">
            <tr>
                <td class="position-absolute start-50 translate-middle-x">
                    <h2 style="margin-top: 20px; margin-right: 10px">FantaCrash</h2>
                </td>
                <td>
                    <p class="blinking-dot position-absolute start-50 translate-middle-x"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <form class="position-absolute start-50 translate-middle-x" method="POST" action="AuthSys.php">
                        <div class="mb-4">
                            <label for="nome" class="form-label">Inserisci UserName</label>
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                        <div class="mb-5">
                            <label for="pass" class="form-label">Inserisci Password</label>
                            <input type="password" id="pass" name="pass" class="form-control">
                        </div>
                        <input type="submit" value="Accedi" class="btn btn-black border border-light text-light"></button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

    </div>
</body>
</html>
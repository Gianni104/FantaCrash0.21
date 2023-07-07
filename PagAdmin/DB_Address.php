<?php
    // QUI NON SERVE L'INCLUDE DELLA PAGINA.PHP PERCHE' VIENE DICHIARATO FUORI

    session_start();

        if( !isset($_SESSION["online"]) || $_SESSION["online"] == false){
                AccessPage();
            }
?>

<?php

    function OpenPDO()
    {
    $dsn = 'mysql:dbname=crashreport;host=127.0.0.1';
    $user = $_SESSION["nome"]; 
    $password = $_SESSION["pass"] ; 
    $db = new PDO($dsn, $user, $password);
    if($db === false){
        
        $_SESSION["error"] = "ERROR: Could not connect.<br>" . mysqli_connect_error()."<br>";
    }
    return $db;
    }

    function insertdataLOG( $utente, $password, $orario, $indirizzo, $info)
    {
        try
        {
            
                $db = OpenPDO();  
                if( isset( $db )) {
            
                    $sql = "INSERT INTO logaddress ( user, PassW, orario, indirizzo, info) values ( :Utente, :pss, :Temp, :Addr ,:infox) ";
                    $scc = $db->prepare($sql);
                    $scc->bindParam(':Utente',$utente);
                    $scc->bindParam(":pss",$password);
                    $scc->bindParam(':Temp',$orario);
                    $scc->bindParam(':Addr',$indirizzo);
                    $scc->bindParam(":infox",$info);
                    $result=$scc->execute();  
                }  
            
        } 
        catch (Exception $e) {
            echo( $e);
        }
    }

function getdata()
{
   $db = OpenPDO();  
   if( isset( $db )) {

	    $sql = "SELECT * from logaddress order by id DESC";
        $stmt=$db->prepare($sql);
        $stmt->execute(); 
        $result = $stmt->fetchAll(PDO::FETCH_OBJ); 
       
	  return $result;
   }  
}

?>

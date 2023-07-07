<?php
    include "/xampp/htdocs/FantaCrash/pagine.php";
        /*if( !isset($_SESSION["online"]) || $_SESSION["online"] == false){
                AccessPage();
            }*/
?>

<?php

function OpenPDO()
{
  $dsn = 'mysql:dbname=crashreport;host=127.0.0.1';
  $user = "FatCEO";//$_SESSION["nome"]; 
  $password = "admin";//$_SESSION["pass"] ; 
  $db = new PDO($dsn, $user, $password);
  if($db === false){
     
	  $_SESSION["error"] = "ERROR: Could not connect.<br>" . mysqli_connect_error()."<br>";
   }
   return $db;
}

function insertdata($user, $img, $punti )
{
   try
   {
   if( isset( $crashid ) && isset( $imgage ) )
   {
	   $db = OpenPDO();  
	   if( isset( $db )) {
            $sql = "INSERT INTO rank (user, img, punti) values (:utente, :immg, :points ) ";
            $scc = $db->prepare($sql);
            $scc->bindParam(':utente',$user);
            $scc->bindParam(':immg',$img);
            $scc->bindParam(':points',$punti);
            $result=$scc->execute();  
	   }  
   }
  } catch (Exception $e) {
     
        echo( $e);
  }
}

function getdata()
{
   $db = OpenPDO();  
   if( isset( $db )) {

	   $sql = "SELECT * from rank order by id";
      $stmt=$db->prepare($sql);
      $stmt->execute(); 
      $result = $stmt->fetchAll(PDO::FETCH_OBJ); 
       
	  return $result;
   }  
}

?>
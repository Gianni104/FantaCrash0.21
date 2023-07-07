<?php
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

function insertdata( $crashid, $imgage, $desc, $utenteID )
{
   try
   {
   if( isset( $crashid ) && isset( $imgage ) )
   {
	   $db = OpenPDO();  
	   if( isset( $db )) {
	   
		 $sql = "INSERT INTO crashreport ( CrashID, IMG, Descrizione, UserID) values ( :crid, :img, :descr, :USID ) ";
		 $scc = $db->prepare($sql);
		 $scc->bindParam(':crid',$crashid);
		 $scc->bindParam(':img',$imgage);
       $scc->bindParam(':descr',$desc);
       $scc->bindParam(':USID',$utenteID);
		 $result=$scc->execute();  
	   }  
   }
  } catch (Exception $e) {
     
        echo( $e);
  }
}

function deletedata($id)
{
   $db = OpenPDO();  
   if( isset($id))
   {
      $sql = "DELETE FROM crashreport where ID = :cid ";
      $scc = $db->prepare($sql);
      $scc->bindParam(':cid',$id);
      $result=$scc->execute();  
   }
}

function updatedata($id, $crashid, $imgage, $desc )
{
   if( isset( $crashid ) && isset( $imgage ) )
   {
	   $db = OpenPDO();  
	   if( isset( $db )) {
	   
		 $sql = "UPDATE crashreport SET CrashID=:crid, img=:img, Descrizione=:descr where id=:cid";
		 $scc = $db->prepare($sql);
		 $scc->bindParam(':crid',$crashid);
		 $scc->bindParam(':img',$imgage);
       $scc->bindParam(':descr',$desc);
       $scc->bindParam(':cid',$id);
		 $result=$scc->execute();  
	   }  
   }
}



function getdata()
{
   $db = OpenPDO();  
   if( isset( $db )) {

	   $sql = "SELECT * from crashreport order by id DESC";
      $stmt=$db->prepare($sql);
      $stmt->execute(); 
      $result = $stmt->fetchAll(PDO::FETCH_OBJ); 
       
	  return $result;
   }  
}

?>
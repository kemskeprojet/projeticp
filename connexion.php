 <?php
   $pdo=null;
   $dsn='mysql:host localhost; dbname moduleinventaire2';
   $dbuser='root';
   $psw='';
   try{
      $myconnexion=new PDO('mysql:host=localhost;dbname=moduleinventaire2','root','');
      $myconnexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException$e){
   	    echo'connexion failed: ' .$e->getmessage();
   }
   
 ?>
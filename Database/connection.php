 <?php
try
 {
     $connection= new PDO('mysql:host=localhost;dbname=ppi','root','' );
     $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

 }
catch(PDOException $exception)
     {
         echo 'something is worng'.$exception->getMessage();
     }
 ?>
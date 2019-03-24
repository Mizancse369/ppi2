<?php
require_once 'database/connection.php';

id=(int)$_GET['id'];
if ($id>0){



    $query="DELETE FROM user where id=:id";
    $stmt=$connection->prepare(query);
    $stmt->bindParam(':id',$id);
    $stmt->execute();



}
header('location:users.php');

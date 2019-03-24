<?php
require_once 'database/connection.php';


$query="SELECT id,email,photo FROM user ORDER BY email asc ";
$stmt=$connection->query($query);
$stmt->execute();

$user=$stmt->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user list</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
 <div class="row">
     <table class="table table-bordered table-hovered">
   <thead>
     <tr>
         <td><h3>ID</h3></td>
         <td><h3>Email</h3></td>
         <td><h3>Photo</h3></td>
         <td><h3>Action</h3></td>
     </tr>
   </thead>
     <tbody>
     <?php foreach ($user as $users):?>
     <tr>
         <td> <h1><?php echo $users['id'];?> </h1></td>
         <td><h4> <?php echo $users['email'];?> </h4></td>
         <td><img src="uploads/profile_photo/<?php echo $users['photo']; ?>" alt="<?php echo $users['email'];?>" width="110"> </td>
         <td>
             <a href="delete_user.php?id=<?php echo $user['id']; ?>"
                onclick="return confirm('Are you sure?')"
                class="btn btn-sm btn-danger">

                 Delete
             </a>
         </td>
     </tr>
     <?php endforeach;?>
     </tbody>


 </div>
</div>
</body>
</html>
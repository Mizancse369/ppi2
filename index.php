 <?php
 $message= false;

if(isset($_POST['register'])) {
    $email=strtolower(trim($_POST['email']));
    $password=trim($_POST['password']);
    $password=password_hash($password, PASSWORD_BCRYPT);

    if(!empty($_FILES['photo']['tmp_name'])) {
    $name=$_FILES['photo']['name'];
    $filename_parts=explode('.',$name);
    $extension= end($filename_parts);
    $new_filename=uniqid('ppi',true).time().'.'.$extension;
    move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/profile_photo/' .$new_filename);
  }
     $photo=$new_filename;
    require_once 'Database/connection.php';

$sql="INSERT INTO  user(`email`,`password`,`photo`)VALUES(:email,:password,:photo)";

$stmt=$connection->prepare($sql);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':photo',$photo);

$response=$stmt->execute();
if ($response){
    echo 'registation scuccessful';
}else
    {
     echo 'registation unsuccessful';
    }
}


 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>from</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if($message): ?>

    <div class="alert alert-success">
      <?php echo $message;?>
    </div>
    <?php endif; ?>
    <form class="form-signin" action="" method="post" enctype="multipart/form-data" >
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">register</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <label for="inputPassword" class="sr-only">Photo</label>
        <input type="file" name="photo" class="from-control" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">register</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
</div>

</body>
</html>
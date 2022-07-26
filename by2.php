<?php
include 'db.php';
// include './bootstrap.min.css';

if(!$conn){
    die("connection failed:". mysqli_connect_error());
}
else{
    $email=$_POST['email'];
    $pass=$_POST['password'];
}
$sql="SELECT `email`,`password` FROM `data`;";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
    while($row=mysqli_fetch_assoc($result)){
        $em=$row['email'];
        $pas=$row['password'];
    }
}
else{
    echo "error";
}


if($email==$em && $pass==$pas)
{
    echo '
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <div class="alert alert-success" role="alert">
    <h1>Success!</h1>
  </div>';
}
else{
    echo "error";
}

?>
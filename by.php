<?php
include 'db.php';
if(!$conn){
    echo "error";
}

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
if($password==$password2)
{
    $pass=$password;
}
else{
    echo "error";
}


$sql="INSERT INTO `data`(`id`, `name`, `sname`, `email`, `address`, `password`) VALUES (' ','$name','$surname','$email','$address','$pass')";

$res=mysqli_query($conn, $sql);
echo $res;
if($res){ 
    echo "successfull!";
}
else{
    // echo "not sucessfull";
    echo mysqli_error($conn);
}
?>
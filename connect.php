<?php
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $Address=$_POST['Address'];
    $ContactNo=$_POST['ContactNo'];
    $message=$_POST['message'];

$conn=new mysql('localhost','root','','test');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into registration(name, email,city,Address,ContactNo,message)values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$name,$email,$city,$Address,$ContactNo,$message);
    $stmt->execute();
    eco"registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
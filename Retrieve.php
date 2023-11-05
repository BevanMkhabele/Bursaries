<?php
Define('DB_HOST','localhost');
Define('DB_USERNAME','root');
Define('DB_PASSWORD','');
Define('DB_NAME','registration_form');

$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


    
    if (mysqli_connect_errno()){
       echo "Database failed to connect to ".mysqli_connect_error;
     die();
    }
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
    
  $name = $_POST['name'];
    $surname = $_POST['surname'];
    $idNumber = $_POST['idNumber'];
    $phoneNumber = $_POST['phoneNumber'];
  
  $stmt = $conn->prepare("INSERT INTO user_data(name,surname,idNumber,phoneNumber)VALUES(?,?,?,?)");
  $stmt->bind_param('ssss',$name,$surname,$idNumber,$phoneNumber);
  
  if($stmt->execute()){
    echo "You are registered successfully";
  }else{
    echo "Something went wrong...";
  }
  
    
    
  }else{
    echo "Invalid entry";
  }

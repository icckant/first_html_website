


<?php
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');

  $server = "localhost";
  $user = "anti";
  $password = "anti";
  $database = "test";
  if(empty($name||$email)){
    echo "attributes can't be empty";
    die();
}

  $conn = mysqli_connect($server,$user,$password,$database);

  $sql = "INSERT INTO `anti` (`name`, `email`) VALUES ( '$name', '$email');";
   
  $result = mysqli_query($conn,$sql);
  if($result){
     echo "your details are submitted successfully you can check on Home/Your-Details";
    
  }
 
// if(!empty($name)){
// if(!empty($email)){
//     // connection 
//     $server = "localhost";
//     $user = "root";
//     $password = "";
//     $database = "test";
//      // create connection
//     $conn = mysqli_connect($server,$user,$password,$database);
//     if(!$conn){
//         die("connection failed");
//     }
//     else{
//         $sql = "INSERT INTO `table` (`$name`, `$email`) VALUES ('1', 'Dheerendra Kumar', 'dkuarya');";
//         if($conn->query($sql)){
//             echo "new record submitted successfully";
//         }
//         else{
//             echo "error". $sql .$conn->error;
//         }
//         $conn->close();
//     }
// }
// else{
//     echo "password cannot be empty";
//     die();
// }

// }
// else{
//     echo "name cannot be empty";
//     die();
// }


// 
?>
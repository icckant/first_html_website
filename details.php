<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            font-size: 28px;
            
        }
        table tr th {
            padding: 12px;
            border: 1px solid black;
    
            margin: 5px;
        }
        table tr td {
            padding: 12px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
        <th>Id</th>
        <th id="name">Name</th>
        <th>Email</th>
        </tr>
        <?php
// server details
  $server = "localhost";
  $user = "anti";
  $password = "anti";
  $database = "test";
  // database connection
  $conn = mysqli_connect($server,$user,$password,$database);
  $sql = "SELECT no,name,email from anti";
  $result = $conn->query($sql);
  if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["no"] . "</td><td>". $row["name"]. "</td><td>".
        $row["email"] ."</td></tr>";
        echo "\n";
    }
    echo "</table>";
  }
   else{
    echo "0 result";
   }
   
?>
    </table>
</body>
</html>

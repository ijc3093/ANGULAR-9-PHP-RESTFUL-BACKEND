<?php

/**
 * Returns the list of policies.
 */
 require './database.php';

// phpinfo();

// $conn = new mysqli("127.0.0.1","root","Merciful$100","hfr");
$policies = [];
$sql = "SELECT id, number, amount FROM policies";


//var_dump($sql);
try{

if($result = mysqli_query($conn, $sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $policies[$i]['id']    = $row['id'];
    $policies[$i]['number'] = $row['number'];
    $policies[$i]['amount'] = $row['amount'];
    $i++;
  }

  echo json_encode($policies);
}
else
{
  http_response_code(404);
}
}catch(Exception $e){
  echo $e->getMessage();
}
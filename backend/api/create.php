<?php
require 'database.php';

// Get the posted data.
$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  // Extract the data.
  $request = json_decode($postdata);


  // Validate.
  if(trim($request->number) === '' || (float)$request->amount < 0)
  {
    return http_response_code(400);
  }

  // Sanitize.
  $number = mysqli_real_escape_string($conn, trim($request->number));
  $amount = mysqli_real_escape_string($conn, (int)$request->amount);


  // Create.
  $sql = "INSERT INTO `policies`(`id`,`number`,`amount`) VALUES (null,'{$number}','{$amount}')";
  if(mysqli_query($conn,$sql))
  {
    http_response_code(201);
    $policy = [
      'number' => $number,
      'amount' => $amount,
      'id'    => mysqli_insert_id($conn)
    ];
    echo json_encode($policy);
  }
  else
  {
    http_response_code(422);
  }
}
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Merciful$100');
define('DB_NAME', 'hfr');

function connect()
{
  $connect = new mysqli("127.0.0.1" ,"root" ,"Merciful$100" ,"hfr");

  if (mysqli_connect_errno($connect)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;


  // private $DB;
  // try{
  //   $this->DB = new PDO{"mysql:host={$_SERVER['127.0.0.1']};dbname={$_SERVER['hfr']}", $_SERVER['root'], $_SERVER['Merciful$100']);
  //   $this->DB = setAttribute(PDO::ATTR_DEFFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  //   $this->DB = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMORE_EXCEPTION);
  //   $this->DB = setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // }
}

$conn = connect();

// echo "hello world";
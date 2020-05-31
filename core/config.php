<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','seeyou_dba');//seeyou_dba
define('DB_PASSWORD','You_Password_123');//You_Password_123
define('DB_NAME','seeyouuserdb');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false)
  die("Error: DbCnnctErr, Contact Administrator!");

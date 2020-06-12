<?php
//error_reporting(0);

$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);

define('DB_SERVER', $cleardb_server);
define('DB_USERNAME', $cleardb_username);
define('DB_PASSWORD',$cleardb_password);
define('DB_NAME', $cleardb_db);

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false)
  echo ("<div style='color:#fff;background-color:#B71C1C;padding: 0.5%;position:fixed;width:100%;'>Error: DbCnnctErr, Contact Administrator!</div>");

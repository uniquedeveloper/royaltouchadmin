<?php 
// DB credentials.
define('DB_HOST','sql108.infinityfree.com');
define('DB_USER','if0_35809152');
define('DB_PASS','CKGC1Xq6mau4UYP');
define('DB_NAME','if0_35809152_cwmsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
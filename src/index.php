<?php
  
  try {
    echo 'Current PHP version: ' . PHP_VERSION . '<br />';
    
    $host = 'db';
    $dbname = getenv('MYSQL_DB_DATABASE');
    $username = getenv('MYSQL_DB_USER');
    $password = getenv('MYSQL_DB_PASS');
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $username, $password);
    
    echo 'Database connected successfully! <br />';
  } catch (Throwable $t) {
    echo 'Error: ' . $t->getMessage() . '<br />';
  }
<?php

require(__DIR__ . '/../config/database.php');

function connect () {
  try {
    return new PDO(sprintf('mysql:host=%s;dbname=%s', DB_HOST, DB_NAME), DB_USER, DB_PWD);
  } catch (PDOException $e) {
    print('Error PDO');
    return null;
  }



  // return $conn;
}

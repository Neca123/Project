<?php

class DBAccess 
{

  function connect() 
  {
    return new PDO('mysql:host=127.0.0.1;dbname=sporty', 'root', '');
  }

}

$db = new DBAccess();
$db->connect();
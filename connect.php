<?php

  try{
    $db = new PDO("mysql:host=localhost;dbname=cmp",'root','root');
    echo 'Database Connected Successfully!';
}catch(PDOException $e){
      echo 'Database Connection failed!';
    echo $e->getMessage(); 
    die();
  };

?>
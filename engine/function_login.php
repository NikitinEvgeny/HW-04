<?php
$db = new PDO (dsn:'sqlite:../data/db.db');
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;


$stmt = $db->prepare(query: 'SELECT user_login FROM users');
$stmt->execute();
$user_login = $stmt->fetchAll(mode:PDO::FETCH_COLUMN);


if (in_array($login,$user_login))

{
   
    $stmt = $db->prepare(query:'select * from users where user_login = ?');
    $stmt->execute([$login]);
    $users = $stmt->fetch(mode:PDO::FETCH_NUM); 

  } 
  else 
  
  {
    header('Location:../login.php');
  }
  

if (  $users[2] == $password )
{

    session_start();
    $_SESSION['naim'] = $users[3]; 
    header('Location:../index.php');

}

else 
  
{
  header('Location:../login.php');
}

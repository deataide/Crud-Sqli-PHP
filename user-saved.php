<?php

switch (@$_REQUEST["acao"]) {
  case 'cadastrar':
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    
    $sql= "INSERT INTO users (name,
     email, password) VALUES(
      '{$name}', '{$email}', '{$password}')";

  $res = $conn-> query($sql);

if ($res==true) {
  print "<script>location.href='?page=users';</script>";
} else {
  print "<script>location.href='?page=users';</script>";
}
    break;

    case 'editar':
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);

$sql = "UPDATE users SET
        name='{$name}',
        email='{$email}',
        password='{$password}'
        WHERE id=".$_REQUEST["id"];
       
      $res = $conn-> query($sql);

if ($res==true) {
  print "<script>location.href='?page=users';</script>";
} else {
  print "<script>location.href='?page=users';</script>";
}
    break;
    
  case 'excluir':
    $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];

    $res = $conn-> query($sql);

    if ($res==true) {

      print "<script>location.href='?page=users';</script>";
    } else {

      print "<script>location.href='?page=users';</script>";
    }
    break;
  
  default:
    # code...
    break;
}

?>
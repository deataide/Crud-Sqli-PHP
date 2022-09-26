<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <h1>Crud</h1>
    <div class="navbar">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="?page=newusers">New User</a>
          </li>
          <li>
          <a href="?page=users">Users List</a>
          </li>
      </ul>
    </div>
  </header>

<main>
  <div class="container">
  <?php
  include('config.php');
switch (@$_REQUEST["page"]) {
  case 'newusers':
    include('newuser.php');
    break;
  case 'users':
    include('userslist.php');
    break;
  case 'send':
    include('user-saved.php');
    break;
  case 'editar':
    include('editar-usuario.php');
    break;
  default:
    print('<h1>Seja bem-vindo</h1>');
    break;
  }
?>
  </div>
</main>

</body>
</html>
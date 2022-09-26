<h1>Editar User</h1>

<?php

  $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];

  $res = $conn->query($sql);
  $row = $res->fetch_object();

?>

<form method="POST" action="?page=send">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id;?>">

<label>Name</label>
<input type="text" name="name" value="<?php print $row->name;?>">
<label>Email</label>
<input type="email" name="email"value="<?php print $row->email;?>">
<label>Password</label>
<input type="password" name="password" required>

<button type="submit">Enviar</button>

</form>

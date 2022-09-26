<h1>Listar usuários</h1>

<?php


$sql = "SELECT * FROM users";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
  print "<table>";

  print "<tr>";
  print "<th>#</th>";
  print "<th>name</th>";
  print "<th>email</th>";
  print "<th>Ações</th>";
  print "<tr>";

  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>".$row->id."</td>";
    print "<td>".$row->name."</td>";
    print "<td>".$row->email."</td>";
    print "<td>
    <button onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>
    </td>";
    print "<td>
    <button onclick=\"location.href='?page=send&acao=excluir&id=".$row->id."';\">
    Excluir</button>
    </td>";
    print "<tr>";

  }


  print "</table>";

}else{
  
  print "<p>Não encontrou resultados</p>";
}



?>
<?php
include('connection.php');
$sql=<<<EOF
select * from usuarios;
EOF;

$ret=$db -> query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "<p>id = ". $row['id'] . "</p>";
      echo "<p>nombre = ". $row['nombre'] ."</p>";
      echo "<p>correo = ".$row['correo'] ."</p>";
   }

$db->close();

?>
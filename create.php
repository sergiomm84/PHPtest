<?php
include('connection.php');
$sql=<<<EOF
insert into usuarios (nombre,correo) values('nombre 3','correo3@correo.com');
EOF;

$ret=$db -> query($sql);
if(!$ret){
    echo $db->lastErrorMsg();
    //echo exec('whoami');
}else{
    echo "Consulta realizada";
}

$db->close();

?>
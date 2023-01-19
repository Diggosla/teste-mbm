<?php

$dbHost= 'Localhost';
$dbUsername='root';
$dbPassword='';
$dbName='manufacturer_base';

$conexao= new mysqli($dbHost,$dbUsername,$dbPassword, $dbName);

if($conexao->connec_errno)
{
    echo "Erro"
}
else
{
    echo  "conexão efetuada com sucesso";
}

?>
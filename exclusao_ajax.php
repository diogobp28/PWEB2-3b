<?php

include "conexao.php";

$id_user = $_POST['id'];
$sql = "DELETE FROM USUARIO WHERE ID_USUARIO = $id_user";

try { mysqli_query(
    $connect, $sql);
} catch (\Throwable $error) {
    die($error);
}

$response = array("success" => true, "id" => $id_user);
echo json_encode($sql);

?>
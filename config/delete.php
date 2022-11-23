<?php
require "./connector.php";

$id = $_GET["id"];

function delete(){
    global $showroom;
    global $id;

    $query = "DELETE FROM showroom_intan_table WHERE id_mobil=$id";
    mysqli_query($showroom, $query);

    return mysqli_affected_rows($showroom);
}

if(delete($id)){
    header("Location: ../pages/ListCar-Intan.php");
    exit;
}

?>
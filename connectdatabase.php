<?php
$servername = "localhost";
$database = "pokemonbd";
$username = "adminpkm";
$password = "adminpkm";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tb_carrossel";

$id_carrossel=[];

$nome=[];

$url_img=[];

$descricao=[];

$posicao=[];

    if ($result = $conn->query($sql)) {

        while($obj = $result->fetch_object()){

            array_push($id_carrossel,$obj->id_carrossel);

            array_push($nome,$obj->nome);

            array_push($url_img,$obj->url_img);

            array_push($descricao,$obj->descricao);

            array_push( $posicao,$obj->posicao);

        }

    }
        

    $result->close();

    unset($obj);

    unset($sql);

    unset($query);
mysqli_close($conn);

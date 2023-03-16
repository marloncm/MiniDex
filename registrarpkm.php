


<?php


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['registrar'])) {
    func();
}
function func()
{

    $servername = "localhost";
    $database = "pokemonbd";
    $username = "adminpkm";
    $password = "adminpkm";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sqlUltimaPosicao = "SELECT posicao FROM tb_carrossel
ORDER BY posicao desc 
limit 1";

    if ($result = $conn->query($sqlUltimaPosicao)) {

        while ($obj = $result->fetch_object()) {
            $ultimaPosicao = $obj->posicao;
        }
        $ultimaPosicao++;
    }


    $sqlInsert = "INSERT INTO tb_carrossel(nome, url_img, descricao, posicao) 
    VALUES('{$_POST['nomepkm']}', '{$_POST['linkpkm']}', '{$_POST['descpkm']}', {$ultimaPosicao})";


    if ($conn->query($sqlInsert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }


    $result->close();

    unset($obj);

    unset($sqlInsert);
    unset($sqlUltimaPosicao);
    mysqli_close($conn);


    header("Location: index.php");

    die();
}
?>
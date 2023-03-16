


<?php


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login'])) {
    func();
}
function func()
{
    session_start();
    $_SESSION["usuario_invalido"] = false;
    $servername = "localhost";
    $database = "pokemonbd";
    $username = "adminpkm";
    $password = "adminpkm";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sqlUsuario = "SELECT * FROM tb_usuarios WHERE username = '{$_POST['nickname']}' AND senha = '{$_POST['pass']}'";



    if ($result = $conn->query($sqlUsuario)) {

        while ($obj = $result->fetch_object()) {
            $tipoUsuario = $obj->tipo_usuario;
        }

        $result->close();
        unset($obj);
        unset($sqlUsuario);
        mysqli_close($conn);


        if ($tipoUsuario) {
            $_SESSION["tipo_usuario"] = $tipoUsuario;

            if ($tipoUsuario == "A") {

                header("Location: index.php");
            } else if ($tipoUsuario == "U") {

                header("Location: index.php");
            }
        } else {
            $_SESSION["usuario_invalido"] = true;
            header("Location: login.php");
        }
    }








    die();
}
?>
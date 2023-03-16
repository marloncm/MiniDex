<?php
session_start();

include('connectdatabase.php');
$widthImg = 315;
$heightImg = 300;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>


  <div class="container pg-background text-center">


    <h2>Mini Pokédex</h1>
      <div class="slideshow-container photo-background">


        <?php
        for ($i = 0; $i < count($id_carrossel); $i++) {
        ?>
          <div class="pkmslides  ">
            <div class="card card-pkm border border-dark">
              <img class="card-img-top card-pkm-img" src="<?php echo $url_img[$i]; ?>">
              <div class="card-body border border-dark pkmdesc card-pkm-txt">
                <h5 class="card-title "><?php echo $nome[$i]; ?></h5>
                <p class="card-text "><?php echo $descricao[$i]; ?></p>
              </div>
            </div>
            <div class="numbertext"><?php echo $i + 1; ?> / <?php echo count($url_img); ?></div>

          </div>
        <?php
        }
        ?>



        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <?php
      if (isset($_SESSION['tipo_usuario']) && ($_SESSION['tipo_usuario'] == "A")) {
      ?>

        <form action="registrarpkm.php" method="post">
          <div class="form-group">
            <label>Nome do Pokémon</label>
            <input type="text" class="form-control" name="nomepkm" placeholder="Nome" required>
          </div>

          <div class="form-group">
            <label>Imagem</label>
            <input type="text" class="form-control" name="linkpkm" placeholder="Url da Imagem" required>
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descpkm" placeholder="Descrição" required>
          </div>
          <input type="submit" name="registrar" class="btn btn-primary" />
        </form>
      <?php
      }


      unset($_SESSION['tipo_usuario']);
      session_destroy();
      ?>

  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
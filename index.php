<?php
include_once('conexao.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- WebSite formats -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=Loja Virtual, initial-scale=1.0">

  <!-- title WebSite-->
  <title>NIE</title>

  <!-- Icon to WebSite; Favicons  -->
  <!-- https://www.favicon-generator.org/ -->
  <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="./assets/images/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#FFFFFF">


  <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./assets/Semantic-UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="./assets/Semantic-UI/semantic.min.js"></script>

  <title> </title>

  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./assets/bootstrap/css/"> -->

  <!-- Estilos customizados para esse template -->
  <!-- <link href="jumbotron.css" rel="stylesheet"> -->
</head>

<body>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>




    <!-- Imagem e texto -->
    <?php
    include('header.php');
    ?>




    <main role="main">
        <div class="container">
            <!-- CARROSEL -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 imagemm" src="./assets/images/baixadanerd.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 imagemm" src="./assets/images/vestibulinho.jpg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 imagemm" src="./assets/images/alll.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>



        <div class="container">

            <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

            <hr class="featurette-divider">

            <?php
            $result_dados = "SELECT DISTINCT * FROM tb_anuncio";
            $pessoas = "SELECT id FROM tb_anuncio";
            $resultado_dados = mysqli_query($connn, $result_dados);


            $i = 1;

            while ($row_dados = mysqli_fetch_assoc($resultado_dados)) {
                // $update_fotos = "UPDATE FROM tb_usuario WHERE foto ";


                if ($i == 1) {
                    echo "<div class=\"row featurette\">
                        <div class=\"col-md-7\">
                            <h2 class=\"featurette-heading\">" . $row_dados['nm_anuncio'] . "</h2>
                            <p class=\"lead\">" . $row_dados['ds_anuncio'] . "</p>
                        </div>
                        <div class=\"col-md-5\">
                            <img class=\"featurette-image img-fluid mx-auto\" src=\"" . $row_dados['path'] . "\" alt=\"Generic placeholder image\">
                        </div>
                    </div>
        
                    <hr class=\"featurette-divider\">";
                    $i = 2;
                } else if ($i == 2) {
                    echo "<div class=\"row featurette\">
                    <div class=\"col-md-7 order-md-2\">
                    <h2 class=\"featurette-heading\">" . $row_dados['nm_anuncio'] . "</h2>
                    <p class=\"lead\">" . $row_dados['ds_anuncio'] . "</p>
                </div>
                <div class=\"col-md-5 order-md-1\">
                    <img class=\"featurette-image img-fluid mx-auto\" src=\"" . $row_dados['path'] . "\" alt=\"Generic placeholder image\">
                </div>
                    </div>
        
                    <hr class=\"featurette-divider\">";
                    $i = 1;
                }
            }
            ?>

            <!-- /FIM DAS FEATUREZINHAS *-* -->

            <div class=" d-flex justify-content-center">
                <a href="#" class="btn btn-danger">VOLTAR AO TOPO</a>
            </div>

        </div><!-- /.container -->

    </main>

    <?php
        include('footer.php');
    ?>


    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
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
  <?php
  // define variables and set to empty values

  $name = $email = $gender = $comment = $website = $browser = "";



  if (isset($_POST['submit'])) {

    $name = $_POST['formGender'];
  }

  if (isset($_POST['submit'])) {

    $website = $_POST['formGender2'];
  }

  if (isset($_POST['submit'])) {

    $browser = $_POST['formGender3'];
  }

  if (isset($_POST['submit'])) {

    $email = $_POST['email'];
  }

  if (isset($_POST['submit'])) {

    $comment = $_POST['comment'];
  }
  ?>






  <!-- Section: Design Block -->

  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 75%)">
          Encontrou algum bug? <br />
          <span style="color: hsl(218, 81%, 95%)">Relate Aqui!</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: #000">
        Este espaço é utilizado pelo usuário para apresentar um problema relacionado a informações contidas no site, este relato será encaminhado diretamente para o administrador do site, para que sejam tomadas as devidas providências com intuito de solucionar o problema, a mensagem precisa ser direta.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" action="fale-conosco.php">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <p>
                      <label>Onde ele estava?</label>
                      <select class="ui dropdown" name="formGender" name="name" value="<?php echo $name; ?>">
                        <option value="">Selecione...</option>
                        <option value="Link1">Link1</option>
                        <option value="Link2">Link2</option>
                        <option value="Link3">Link3</option>

                      </select>
                    </p>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label> E-mail: </label>
                    <div class="ui input">
                      <input type="text" name="email" value="<?php echo $email; ?>">

                    </div>

                  </div>
                </div>
              </div>

              <!-- Email input -->
              <label> Detalhes: </label>
              <div class="form-outline mb-4">

                <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <p>
                  Digite o sistema operacional:
                  <select class="ui dropdown" name="formGender2" name="website" value="<?php echo $website; ?>">
                    <option value="">Select...</option>
                    <option value="Android">Android</option>
                    <option value="Linux">Linux</option>
                    <option value="MacOS">MacOS</option>
                    <option value="OSX">OSX</option>
                    <option value="Windows">Windows</option>
                  </select>
                </p>
              </div>

              <div class="form-outline mb-4">
                <p>
                  Digite o navegador utilizado:
                  <select class="ui dropdown" name="formGender3" name="browser" value="<?php echo $browser; ?>">
                    <option value="">Select...</option>
                    <option value="Brave">Brave</option>
                    <option value="Chrome">Chrome</option>
                    <option value="FireFox">FireFox</option>
                    <option value="Opera">Opera</option>
                    <option value="Tor">Tor</option>
                  </select>
                </p>
              </div>


              <!-- Submit button -->
              <button name="submit" class="btn btn-success">Enviar</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Section: Design Block -->





















  </div>
  <?php

  $assunto = $website . $comment . $browser;
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <webmaster@example.com>' . "\r\n";
  $headers .= 'Cc: myboss@example.com' . "\r\n";

  mail($email, $name, $assunto, $headers);
  echo "<h2>saida das strings:</h2>";

  echo $name; // bug link
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $comment;
  echo "<br>";
  echo $browser;

  ?>


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
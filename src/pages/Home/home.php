<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../assets/icon.svg">
  <title>Home - WN</title>
  <link rel="stylesheet" type="text/css" href="home.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../global.css" media="screen" />
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

</head>
<body class="container">

  <header>
    <div class="title">
      <span>World News</span>
    </div>
    <div class="pages">
      <a class="active" href="home.php?pag=homepage">Home</a>
      <a class="active" href="home.php?pag=clientepage">Cliente</a>
      <a class="active" href="home.php?pag=empresapage">Empresa</a>
      <a class="active" href="home.php?pag=funcionariopage">Funcionario</a>
    </div>
  </header>

    <section>
      <article>
        <?php
          $pag = isset($_GET['pag']) ? $_GET['pag'] : null;

          if ($pag == 'homepage') {
            echo "<h1>TESTESTETES</h1>";
          }
          if ($pag == 'clientepage') {
            include("../cliente/cliente.php");
            return;
          }

          if ($pag == 'empresapage') {
            include("../empresa/empresa.php");
            return;
          }

          if ($pag == 'funcionariopage') {
            include("../funcionario/funcionario.php");
            return;
          }
      
        ?>
      </article>
    </section>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soluções Turisticas</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="css/business-casual.min.css" rel="stylesheet">
    <!-- roteiro -->
    <link href="css/agency.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/business-casual.min.css" rel="stylesheet">
  </head>

  <body>
    <?php
        include 'cabecalho.php';  
    
        $url=$_GET['url'];
        switch ($url){
            case 'inicio': include('inicial.php'); break;
            case 'galeria': include('galeria.php'); break;
            case 'roteiros': include('roteiros.php'); break;
            case 'rot1': include('roteiro1.php'); break;
            case 'rot2': include('roteiro2.php'); break;
            case 'rot3': include('roteiro3.php'); break;
            case 'rot4': include('roteiro4.php'); break;
            case 'rot5': include('roteiro5.php'); break;
            case 'rot6': include('roteiro6.php'); break;
            case 'contato': include('contato.php'); break;
            default: include('inicial.php');
        }
        
        include 'rodape.php';
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

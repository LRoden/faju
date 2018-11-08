<?php
$roteiro_id = $_GET["url"];
//echo $roteiro_id;
$id = str_replace("rot", "", $roteiro_id);

include './conexao.php';
$sqli = "select * "
        . "from roteiro_lugares, parada, lugares where roteiro_lugares.lugares_id = lugares.id and roteiro_lugares.parada_id = parada.id and roteiro_lugares.roteiro_id = $id;";
$query = $mysqli->query($sqli);
//print_r($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/agency.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/business-casual.min.css" rel="stylesheet">
    </head>


    <body>
        <!-- About -->
    <sectionrot id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="site-heading text-center text-white d-none d-lg-block">
                        <span>ROTEIRO PÔR DO SOL</span>
                    </h4>
                </div>

                <?php
                $count = 0;
                foreach ($query as $q):
                    $count = $count + 1;
                endforeach;
                ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">

                        <?php
                        $count2 = 0;
                        foreach ($query as $q):
                            $count2 = $count2 + 1;
                            if ($count2 % 2 != 0) {
                                //Par
                                ?>
                                <li>
                                    <div class="timeline-image">
                                        <img class="rounded-circle img-fluid" src="upload/lugar/<?php $q['foto_principal'] ?>" alt="">
                                    </div>
                                    <div class="timeline-panel">                           
                                        <div class="intro-text left-0 bg-faded p-3 rounded">    

                                            <div class="timeline-heading">

                                                <h4 class="subheading"><?php echo $q['nome'] ?></h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted"><?php echo $q['descricao'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <?php
                            } else {
                                //Impar;
                                ?>
                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <img class="rounded-circle img-fluid" src="upload/lugar/<?php $q['foto_principal'] ?>" alt="">
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="intro-text left-0 bg-faded p-3 rounded">    
                                            <div class="timeline-heading">

                                                <h4 class="subheading"><?php echo $q['nome'] ?></h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p class="text-muted"><?php echo $q['descricao'] ?></p>
                                            </div>
                                        </div>    
                                    </div>
                                </li>

                            <?php } ?>

                        <?php endforeach; ?>







                    </ul>
                </div>
            </div>
        </div>
    </sectionrot> 

</body>

</html>
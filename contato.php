    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/img3.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Como chegar</span></h2>
                  <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1258.0144451386486!2d-53.70844225360778!3d-27.15855999700508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDA5JzMwLjgiUyA1M8KwNDInMjcuMSJX!5e1!3m2!1spt-BR!2sbr!4v1533247741317" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </section>

<?php
    include 'conexao.php';

    $sql = "Select * from contato";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
      $telefone = $dados['telefone'];
      $celular_1 = $dados['celular_1'];
      $celular_2 = $dados['celular_2'];
      $email = $dados['email'];
      $endereco = $dados['endereco'];
    ?>  
                            
<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Informações de </span>
                <span class="section-heading-lower">Contato</span>
              </h2>
              <p class="address mb-5">
                <em>
                  <strong><?= $endereco; ?></strong>
                
                </em>
                  

              </p>
              <p class="mb-2">
                  <strong>Telefone</strong>
                  <br>
                <?= $telefone; ?><br><br>
                  <strong>WhatsApp</strong>
                <br>
                <?= $celular_1; ?><br>
                 <?= $celular_2; ?><br><br>
                 
                 <strong>E-mail</strong>
                  <br>
                <?= $email; ?><br><br>

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<br><br><br><br><br><br>


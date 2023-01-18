<?php 
  
  require_once("../validar_acesso.php");
  
  include("menu.php");

  $chamadas = array();
  $arquivo = fopen('../arquivo.hd', 'r');

  while(!feof($arquivo)){
    $registro = fgets($arquivo);
    
    $registro_detalhes = explode('#', $registro);

    if($_SESSION['perfil_id'] === 11){
      
      if($_SESSION['id'] != $registro_detalhes[0]){
        continue;
      
      }else{
        $chamadas[] = $registro;
      }

      }else{
        $chamadas[] = $registro; 
      }

  }

  fclose($arquivo); 

?>

<div class="container">
  <div class="row">

    <div class="card-consultar-chamado" style="padding: 30px 0 0 0; width: 100%; margin: 0 auto;">
      <div class="card">
        <div class="card-header">
          <h6>Consultar chamado</h6>
        </div>

        <div class="card-body">
        <?php foreach ($chamadas as $chamada) { ?>

          <?php 

            $chamada_dados = explode("#", $chamada);

            if(count($chamada_dados) < 3){
              continue;
            }

          ?>

          <div class="card mb-3 bg-light">
            <div class="card-body">
              <h5 class="card-title"><?= $chamada_dados[1] ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $chamada_dados[2] ?></h6>
              <p class="card-text"><?= $chamada_dados[3] ?></p>
            </div>
          </div>

        <?php } ?>

          <div class="row mt-5">
            <div class="col-6">
              <a class="btn btn-lg btn-warning btn-block myBtn" href="home.php">Voltar</a>
            </div>      
          </div>
        </div>              
      </div>
    </div>
  </div>
</div> 
          
<script src="js/app.js"></script>
<!-- Bootstrap inicio -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- Bootstrap fim -->

</body>	

</html>
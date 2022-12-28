<?php 
  
  require_once("../validar_acesso.php");

  include("menu.php");

?>

<div class="container">
  <div class="row">
    <div class="card-home">
      <div class="card">
        <div class="card-header">
          <h6>Menu</h6>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-6 d-flex justify-content-center">
              <a href="chamada.php">
                <img class="icon-abrir-chamada" src="../images/formulario_abrir_chamado.png"/>
              </a> 
            </div>

            <div class="col-6 d-flex justify-content-center">
              <a href="consulta.php">
                <img class="icon-consultar-chamado" src="../images/formulario_consultar_chamado.png"/>
              </a>  
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
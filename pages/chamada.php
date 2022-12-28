<?php 
  
  require_once("../validar_acesso.php");

  include("menu.php");

?>
  
<div class="container">
  <div class="row">
    <div class="card-abrir-chamado" style="padding: 30px 0 0 0; width: 100%; margin: 0 auto;">
      <div class="card">
        <div class="card-header">
          <h6>Abertura de chamado</h6>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col">
              <form method="post" action="../criar-chamado.php">
                <div class="form-group mt">
                  <label>Título</label>
                  <input name="titulo" type="text" class="form-control" placeholder="Título"/>
                </div>

                <div class="form-group mt">
                  <label>Categoria</label>
                  <select name="categoria" class="form-control">
                    <option>Criação Usuário</option>
                    <option>Impressora</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Rede</option>
                  </select>
                </div>

                <div class="form-group mt">
                  <label>Descrição</label>
                  <textarea name="descricao" class="form-control" rows="3"></textarea>
                </div>

                <div class="row mt-5 float-end">
                  <div class="col-6">
                    <a class="btn btn-lg btn-warning btn-block myBtn" href="home.php">Voltar</a>
                  </div>
                </div>

                <div class="row mt-5 float-start">
                  <div class="col-6">
                    <button class="btn btn-lg btn-info btn-block myBtn" type="submit">Abrir</button>
                  </div>
                </div>
              </form>
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
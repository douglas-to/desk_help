<?php 

    include("menu.php");

?>

<div class="container">
    <div class="row">
        <div class="card-login" style="padding:30px 0 0 0; width:380px; margin:0 auto;">
            <div class="card">
                <div class="card-header">
                    <h6>Login</h6>
                </div>

                <div class="card-body">
                    <form action="../valida_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control mt" placeholder="Digite seu e-mail"/>
                        </div>

                        <div class="form-group">
                            <input name="senha" type="password" class="form-control mt" placeholder="Digite sua senha"/>
                        </div>

                        <?php if(isset($_GET['login']) && $_GET['login'] === 'erro'){ ?>

                            <div class="text-danger mt">
                                <span>Usúario ou senha invalido(s).</span>
                            </div>

                        <?php } ?>

                        <?php if(isset($_GET['login']) && $_GET['login'] === 'erro2'){ ?>

                            <div class="text-danger mt">
                                <span>Faça login, para acessar as paginas protegidas.</span>
                            </div>

                        <?php } ?>

                        <button type="submit" class="btn btn-lg btn-info btn-block mt myBtn">Entrar</button>
                    </form>
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
<?php 
    require_once 'inc/header.php';
?>
    <body style="background-color: rgb(81, 74, 157);background-image: linear-gradient(to top,rgb(36, 198, 220), rgb(81, 74, 157));background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-8">
                    <div class="login-logo" style="text-align: center;">
                        <img src="imagens/logo_support.png">
                    </div>
                    <br>
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title" style="text-align: center;">Recuperação de Senha - Help Desk </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" method="POST" action="processa/proc_rec_senha.php">
                                <fieldset>
                                    <div class="form-group">
                                        <label>E-mail cadastrado:</label>
                                        <input class="form-control" placeholder="Digite seu e-mail cadastrado.." name="email" type="text" required autofocus>
                                    </div>
                                    <a class="text-center text-danger" href="index.php" style="float: right; font-size: 12px"><i class=" fa fa-arrow-left"></i> Voltar</a>
                                    <br><br>
                                    <button class="btn btn-primary btn-block mb-10" type="submit" style="background-color: #027CC1; border: solid 1px #027CC1"><i class="fa fa-check"></i> Recuperar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            require_once 'inc/footer.php';
        ?>
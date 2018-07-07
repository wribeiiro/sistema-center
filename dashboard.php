    <div id="page-wrapper" style="margin-top: -80px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge" style="font-size: 30px">
                                    <?php require_once ("conexao.php");
                                        $sql = "SELECT COUNT(*) AS total FROM clientes";
                                        $res = mysqli_query($con, $sql);

                                        $linhas = mysqli_fetch_assoc($res);

                                        echo $linhas['total'];
                                    ?>
                                </div>
                                <div>Clientes / Fornecedores</div>
                            </div>
                        </div>
                    </div>
                    <a href="administrativo.php?link=13">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-money fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge" style="font-size: 30px">
                                    <?php require_once ("conexao.php");
                                        $sql = "SELECT COUNT(*) AS total FROM contas_pr";
                                        $res = mysqli_query($con, $sql);

                                        $linhas = mysqli_fetch_assoc($res);

                                        echo $linhas['total'];
                                    ?>
                                </div>
                                <div>Contas Pagar / Receber</div>
                            </div>
                        </div>
                    </div>
                    <a href="administrativo.php?link=37">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge" style="font-size: 30px">
                                    <?php require_once ("conexao.php");
                                        $sql = "SELECT COUNT(*) AS total FROM usuarios";
                                        $res = mysqli_query($con, $sql);

                                        $linhas = mysqli_fetch_assoc($res);

                                        echo $linhas['total'];;
                                    ?>
                                </div>
                                <div>Usuários</div>
                            </div>
                        </div>
                    </div>
                    <a href="administrativo.php?link=2">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>    
    </div>
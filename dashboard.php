        <?php 
            /* Clientes com Pendencias */
            $sqlPend = "SELECT COUNT(*) AS total FROM clientes WHERE situacao = '2'";
            $resultPend = mysqli_query($con, $sqlPend);
            $linhasPend = mysqli_fetch_assoc($resultPend);

             /* Clientes OK */
            $sqlCO = "SELECT COUNT(*) AS total FROM clientes WHERE situacao = '1'";
            $resultCO = mysqli_query($con, $sqlCO);
            $linhasCO = mysqli_fetch_assoc($resultCO);

        ?>
        <div id="page-wrapper" style="margin-top: -80px">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
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
                                    <div>Clientes</div>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-wrench fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 30px">
                                        <?php 
                                            require_once ("conexao.php");
                                            $sql = "SELECT COUNT(*) AS total FROM servicos";
                                            $res = mysqli_query($con, $sql);

                                            $linhas = mysqli_fetch_assoc($res);

                                            echo $linhas['total'];
                                        ?> 
                                    </div>
                                    <div>Serviços</div>
                                </div>
                            </div>
                        </div>
                        <a href="administrativo.php?link=25">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-question-circle fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 30px">
                                        <?php require_once ("conexao.php");
                                            $sql = "SELECT COUNT(*) AS total FROM ordem_servicos";
                                            $res = mysqli_query($con, $sql);

                                            $linhas = mysqli_fetch_assoc($res);

                                            echo $linhas['total'];
                                        ?>
                                    </div>
                                    <div>Ordem de Serviços</div>
                                </div>
                            </div>
                        </div>
                        <a href="administrativo.php?link=20">
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
                
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">Dados Clientes</h1>
                        <div class="row">
                            <ul style="list-style: none; font-size: 18px">
                                <li>
                                    <a href="administrativo.php?link=13" class="hover">
                                        <p class="text-danger">Clientes com pendências: <?= $linhasPend['total']?></p> 
                                    </a>
                                </li>
                                <li>
                                    <a href="administrativo.php?link=13" class="hover">
                                        <p class="text-success">Clientes em dia: <?= $linhasCO['total']?></p> 
                                    </a>
                                </li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="page-header">Notícias</h1>
                        <div class="list-group">
                            <?php
                                $xml = simplexml_load_file('http://pox.globo.com/rss/g1/turismo-e-viagem/') or die("Erro ao carregar arquivo, o arquivo não existe, ou verifique sua conexão com a internet!");
                                $cont = 0;
                                foreach ($xml->channel->item as $noticia) {
                                    $cont ++;

                                    if ($cont >= 4) {
                                        break;
                                    }
                                    $noticia->pubDate = date('d/m/Y');

                                    echo "
                                        <a href=\"$noticia->link\" target=\"_blank\" class=\"list-group-item\">
                                            <i class=\"fa fa-rss fa-fw\"></i> $noticia->title
                                            <br>
                                            <small>$noticia->pubDate - Fonte: G1
                                            </small>       
                                        </a><br>
                                    ";
                                }
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
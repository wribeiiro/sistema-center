      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 50px; margin-top: -70px; background-color: #303030;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="administrativo.php" style="color: #fff">Sistema</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 18px">
                        <span class="hidden-xs">
                            <?php
                                echo '<b style="color: #fff"; font-weight: normal;> ' . $_SESSION['usuarioNome'].'</b>';
                            ?>
                            <i class="fa fa-caret-down" aria-hidden="true" style="color:#fff; font-weight: bold"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="" onclick="popup('http://helpdesk.brasilnota.com.br/chat/', 'Chat-Tickets', '1024', '720')"><i class="fa fa-comments fa-fw"></i> Chat
                        </a>
                        <li>
                            <a href="administrativo.php?link=4&id=<?php echo $_SESSION['usuarioId'] ?>"><i class="fa fa-user fa-fw"></i> Perfil
                        </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="sair.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation" style="margin-top: 70px">
                <div class="sidebar-nav navbar-collapse collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <form name="formBusca" class="form" method="POST" action="administrativo.php?link=34?a=buscar">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                        <input type="text" class="form-control" name="palavra" placeholder="Buscar...">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="administrativo.php" style="color: #666666"><i class="fa fa-dashboard fa-fw" onclick="notify()"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="accordion-heading" data-toggle="collapse" data-target="#submenu3">
                                <span class="nav-header-primary"><i class="fa fa-user fa-fw" style="color: #666666"></i> <b style="font-weight: normal; color: #666666">Clientes </b><b class="caret" style="color: #666666"></b></span>
                            </a>
                            <ul class="nav nav-list collapse" id="submenu3">
                                <li>
                                    <a href="administrativo.php?link=13" title="Listar Clientes"><i class="fa fa-list fa-fw"></i>Listar Clientes</a>
                                </li>
                                <li>
                                    <a href="administrativo.php?link=12" title="Cadastrar Clientes"><i class="fa fa-plus fa-fw"></i>Cadastrar Clientes</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#" class="accordion-heading" data-toggle="collapse" data-target="#submenu4">
                                <span class="nav-header-primary"><i class="fa fa-wrench fa-fw" style="color: #666666"></i> <b style="font-weight: normal; color: #666666">Serviços </b><b class="caret" style="color: #666666"></b></span>
                            </a>
                            <ul class="nav nav-list collapse" id="submenu4">
                                <li>
                                    <a href="administrativo.php?link=25" title="Listar Servicos"><i class="fa fa-list fa-fw"></i>Listar Serviços</a>
                                </li>
                                <li>
                                    <a href="administrativo.php?link=29" title="Listar OS"><i class="fa fa-list fa-fw"></i>Listar OS</a>
                                </li>
                                <li>
                                    <a href="administrativo.php?link=24" title="Cadastrar Servicos"><i class="fa fa-plus fa-fw"></i>Cadastrar Serviços</a>
                                </li>
                                <li>
                                    <a href="administrativo.php?link=28" title="Cadastrar OS"><i class="fa fa-plus fa-fw"></i>Cadastrar OS</a>
                                </li>
                            </ul>
                        </li>
                        
                   
                        <li>
                            <a href="#" class="accordion-heading" data-toggle="collapse" data-target="#submenu5">
                                <span class="nav-header-primary"><i class="fa fa-barcode fa-fw" style="color: #666666"></i> <b style="font-weight: normal; color: #666666">Produtos </b><b class="caret" style="color: #666666"></b></span>
                            </a>
                            <ul class="nav nav-list collapse" id="submenu5">
                                <li>
                                    <a href="administrativo.php?link=32" title="Listar Produtos"><i class="fa fa-list fa-fw"></i>Listar Produtos</a>
                                </li>
                                <li>
                                    <a href="administrativo.php?link=31" title="Adicionar Produtos"><i class="fa fa-plus fa-fw"></i>Adicionar Produtos</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="administrativo.php?link=18" style="color: #666666"><i class="fa fa-file-pdf-o fa-fw"></i> Relatórios</a>
                        </li>
                        <?php 
                            if ($_SESSION['usuarioNivelAcesso']==1) {
                                echo "
                                <li>
                                    <a href=\"#\" class=\"accordion-heading\" data-toggle=\"collapse\" data-target=\"#submenu7\">
                                        <span class=\"nav-header-primary\"><i class=\"fa fa-group fa-fw\" style=\"color: #666666\"></i> <b style=\"font-weight: normal; color: #666666\">Usuários </b><b class=\"caret\" style=\"color: #666666\"></b></span>
                                    </a>  
                                </li>
                                <ul class=\"nav nav-list collapse\" id=\"submenu7\">
                                    <li>
                                        <a href=\"administrativo.php?link=2\" title=\"Listar Usuarios\"><i class=\"fa fa-list fa-fw\"></i>Listar Usuários</a>
                                    </li>
                                    <li>
                                        <a href=\"administrativo.php?link=3\" title=\"Cadastrar Usuarios\"><i class=\"fa fa-plus fa-fw\"></i>Cadastrar Usuários</a>
                                    </li>
                                    <li>
                                        <a href=\"administrativo.php?link=6\"><i class=\"fa fa-lock fa-fw\"></i> Nível Acesso</a>
                                    </li>
                                </ul>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

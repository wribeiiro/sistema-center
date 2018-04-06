<?php 
    $sql   = "SELECT id, nome, situacao FROM clientes ORDER BY nome";
	$query = mysqli_query($con, $sql);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Relatórios Títulos</h1>
        </div>
    </div>
  	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-default">
                	<div class="panel-body">
                		<form method="post" action="gera_rel_tit.php">
							<legend>Filtros</legend>
							<div class="col-sm-12"> 
								<div class="form-group">
									<label>Cliente: </label>
							  		<select class="js-example-basic-single form-control" id="cliente" name="cliente">
							  			<option value="T">Todos</option>
			                            <?php					  		
			                                while($dados = mysqli_fetch_array($query)) {
			                                	echo "<option value=\"".$dados['id']."\">
			                                	".ucfirst(strtolower($dados['nome']))."; 
			                                </option>"; 
			                                }
			                            ?>
			                        </select>
								</div>
							</div>
							<div class="col-sm-12"> 
								<div class="form-group">
									<label>Situação: </label>
							  		<select class="js-example-basic-single form-control" id="situacao" name="situacao">
							  			<option value="N">A Receber</option>
										<option value="S">Recebidos</option>
			                        </select>
								</div>
							</div>
							<div class="col-sm-4"> 
								<div class="form-group">
									<label>Data Inicial: </label>
							  		<input type="text" name="data_inicio" class="date form-control" value="<?php echo date('d/m/Y') ?>" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group"> 
								<label>Data Final: </label> 
						  			<input type="text" name="data_fim" class="date form-control" value="<?php echo date('t/m/Y') ?>" required>
								</div>
				  			</div>
				  			<div class="col-md-8"> 
					  			<div class="form-group">
							  		<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir</a></button>
								</div>
					  		</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->
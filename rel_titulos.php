<?php 
    $sql   = "SELECT id, nome FROM clientes ORDER BY nome";
	$query = mysqli_query($con, $sql);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Relatório Contas Pagar / Receber</h1>
        </div>
    </div>
  	<div class="row">
		<div class="col-md-12 col-sm-4 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-default">
                	<div class="panel-body">
                		<legend>Fluxo de caixa</legend>
                		<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 col-sm-6 col-lg-4 col-xs-12">
                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 01 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);
	                		?>
	                		
	            			<p>Janeiro</p>
	            			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total']?></b>
							  	</div>
							</div>

							<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 02 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);
	                		?>	
	            		
	            			<p>Fevereiro</p>
	            			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total']?></b>
							  	</div>
							</div>	

							<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 03 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);
	                		?>

	            			<p>Março</p>
	            			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total']?></b>
							  	</div>
							</div>

							<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 04 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

							<p>Abril</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total']?></b>
							  	</div>
							</div>
                		</div>   		

                		<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">    

                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 05 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Maio</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>	
                		
                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 06 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Junho</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>	

							<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 07 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

							<p>Julho</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>

							<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 08 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Agosto</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>		
                		</div>
                		
                		<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 09 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Setembro</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>	
                			
                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 10 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Outubro</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>	
                			
                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 11 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Novembro</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>	
                		
                			<?php 
	                			$sql1 = "SELECT YEAR(data_lanc) as ano, MONTH(data_lanc) as mes, SUM(valor_pago) AS total FROM contas_pr WHERE YEAR(data_lanc) AND MONTH(data_lanc) = 12 AND pago = 'S' GROUP BY ano, mes";
								$query1 = mysqli_query($con, $sql1);
								$exe    = mysqli_fetch_assoc($query1);

								if ($exe['total'] <= 0):
									$exe['total'] = 0;
								endif;
	                		?>

                			<p>Dezembro</p>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $exe['total'] ?></b>
							  	</div>
							</div>	
                		</div>
                	</div>
                </div>
            </div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-default">
                	<div class="panel-body">
                		<form method="post" action="gera_rel_tit.php">
							<legend>Filtros</legend>
							<div class="col-sm-12"> 
								<div class="form-group">
									<label>Cliente / Fornecedor: </label>
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
							<div class="col-sm-6"> 
								<div class="form-group">
									<label>Tipo Conta: </label>
							  		<select class="form-control" id="tipoc" name="tipoc">
							  			<option value="P">A Pagar</option>
										<option value="R">A Receber</option>
			                        </select>
								</div>
							</div>
							<div class="col-sm-6"> 
								<div class="form-group">
									<label>Situação: </label>
							  		<select class="form-control" id="situacao" name="situacao">
							  			<option value="S">Pagos</option>
										<option value="N">Em aberto</option>
			                        </select>
								</div>
							</div>
							<div class="col-sm-4"> 
								<div class="form-group">
									<label>Data Inicial: </label>
							  		<input type="text" name="data_inicio" class="date form-control" value="<?php echo date('d/m/Y') ?>" required>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
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
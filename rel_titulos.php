<?php 
	require_once "funcoes.php";
    $sql   = "SELECT id, nome FROM clientes ORDER BY nome";
	$query = mysqli_query($con, $sql);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Relatórios</h1>
        </div>
    </div>
  	<div class="row">
		<div class="col-md-12 col-sm-4 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-default">
                	<div class="panel-body">
                		<legend>Fluxo de caixa - <b class="text-danger">Pagar</b> / <b class="text-primary">Receber</b></legend>
                		<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 col-sm-6 col-lg-4 col-xs-12">
	            			<p>Janeiro</p>
							<?php 	
								$vlp = totalContas(1, 'P'); 
								$vlr = totalContas(1, 'R');
							?>

	            			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr ?></b>
							  	</div>	  
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>

	            			<p>Fevereiro</p>
							<?php 	
								$vlp = totalContas(2, 'P'); 
								$vlr = totalContas(2, 'R');
							?>
	            			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr ?></b>
							  	</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>	

	            			<p>Março</p>
							<?php 	
								$vlp = totalContas(3, 'P'); 
								$vlr = totalContas(3, 'R');
							?>
	            			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr; ?></b>
							  	</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>

							<p>Abril</p>
							<?php 	
								$vlp = totalContas(4, 'P'); 
								$vlr = totalContas(4, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr?></b>
							  	</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>
                		</div>   		

                		<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">    
                			<p>Maio</p>
							<?php 	
								$vlp = totalContas(5, 'P'); 
								$vlr = totalContas(5, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr; ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>
                		
                			<p>Junho</p>
							<?php 	
								$vlp = totalContas(6, 'P'); 
								$vlr = totalContas(6, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr; ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>

							<p>Julho</p>
							<?php 	
								$vlp = totalContas(7, 'P'); 
								$vlr = totalContas(7, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr; ?></b>
							  	</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>

                			<p>Agosto</p>
							<?php 	
								$vlp = totalContas(8, 'P'); 
								$vlr = totalContas(8, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr; ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>	
                		</div>
                		
                		<div class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                			<p>Setembro</p>
							<?php 	
								$vlp = totalContas(9, 'P'); 
								$vlr = totalContas(9, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>
                			
                			<p>Outubro</p>
							<?php 	
								$vlp = totalContas(10, 'P'); 
								$vlr = totalContas(10, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>
                			
                			<p>Novembro</p>
							<?php 	
								$vlp = totalContas(11, 'P'); 
								$vlr = totalContas(11, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
							  	</div>	  
							</div>
                		
                			<p>Dezembro</p>
							<?php 	
								$vlp = totalContas(12, 'P'); 
								$vlr = totalContas(12, 'R');
							?>
                			<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlr ?></b>
							  	</div>
							</div>	
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <b>R$ <?= $vlp ?></b>
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
	<?php
		$sql 	   = "SELECT * FROM clientes ORDER BY 'id'";
		$resultado = mysqli_query($con, $sql);
		$linhas    = mysqli_num_rows($resultado);
	?>	
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Clientes / Fornecedores</h1>
            </div>
        </div>
        <div class="row">
			<div class="col-md-8" style="text-align: left;">
				<a href="administrativo.php?link=12"><button type='button' class='btn btn-success'><i class="fa fa-pencil"></i> CADASTRAR</button></a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="dataTable_wrapper">
				  	<table class="table table-striped table-bordered table-hover" id="tableClient" style="width: 100%">
				  	<!--<table class="table table-striped table-bordered table-hover">-->
						<thead>
						 	<tr>
								<th>ID</th>
								<th>CLIENTE / FORNECEDOR</th> 
								<th>TELEFONE</th>
								<th>E-MAIL</th>
								<th>AÇÕES</th>
						  	</tr>
						</thead>
						<tbody>
							<?php 
								while($linhas = mysqli_fetch_array($resultado)){

									echo "<tr>";
										echo "<td>".$linhas['id']."</td>";
										echo "<td>".strtoupper($linhas['nome'])."</td>";
										echo "<td>".$linhas['telefone']."</td>";
										echo "<td>".$linhas['email']."</td>";
										?>
										<td> 
										<a href='administrativo.php?link=17&id=<?php echo $linhas['id']; ?>' data-toggle='tooltip' title='EDITAR'><button type="button" class="btn btn-info btn-circle"><i class="fa fa-pencil"></i></button></a>
										
										<a href='processa/proc_apagar_clientes.php?id=<?php echo $linhas['id']; ?>' data-toggle='tooltip' title='EXCLUIR'><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button></a>
										
										<?php
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- /container -->



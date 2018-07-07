<?php
	$id = $_GET['id'];
	//Executa consulta

	$sql 		= "SELECT * FROM clientes WHERE id = '$id' LIMIT 1";
	$result 	= mysqli_query($con, $sql);
	$resultado  = mysqli_fetch_assoc($result);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Cliente / Fornecedor</h1>
        </div> 
    </div>
  	<div class="row"> 
		<div class="panel panel-primary">
            <div class="panel-heading">
            	Preencha o formulário do cliente
            </div>
            <div class="panel-body">
		  		<form class="form" method="POST" action="processa/proc_edit_clientes.php">
		  			<div class="col-sm-4">
			            <div class="form-group">
						   <label>Tipo Pessoa: </label> <span style="color: red; font-weight: bold;"> *</span>
		  					<select class="form-control" name="tipo_pessoa">
		  						<option value="0">Selecione o Tipo</option>
					  			<option value="1"
								<?php
									if( $resultado['tipo_pessoa'] == 1){
										echo 'selected';
									}
								?>
								>Física</option>
								<option value="2"
								<?php
									if( $resultado['tipo_pessoa'] == 2){
										echo 'selected';
									}
								?>
								>Jurídica</option>
					  	 	</select>
						</div>
					</div>
		  			<div class="col-sm-4">
			  			<div class="form-group">
							<label>Nome: </label><span style="color: red; font-weight: bold;"> *</span>
				  			<input type="text" class="form-control" name="nome" placeholder="Informe o nome Completo" value="<?php echo $resultado['nome']; ?>">
						</div>
			  		</div>
			  		<div class="col-sm-4">
				  		<div class="form-group">
							<label>Telefone: </label><span style="color: red; font-weight: bold;"> *</span>
					  		<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Informe o telefone" value="<?php echo $resultado['telefone']; ?>">
						</div>
				  	</div>
				  	<div class="col-sm-4">
				  		<div class="form-group">
							<label>CPF/CNPJ: </label><span style="color: red; font-weight: bold;"> *</span>
					  		<input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="Informe o cpf ou cnpj" value="<?php echo $resultado['cnpj']; ?>">
						</div>
				  	</div>

					<div class="col-sm-4">
						<div class="form-group">
						    <label>Data do cadastro:</label><span style="color: red; font-weight: bold;"> *</span>
						  	<input type="text" class="form-control calendario" name="data_cadastro" id="data_cadastro" value="<?php echo $resultado['data_cadastro']; ?>">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						    <label>E-mail: </label>
						    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail do Cliente" value="<?php echo $resultado['email'] ?>">
						</div>
					</div>					
					<div class="col-sm-12">
						<div class="form-group">
						    <label>Observação: </label>
						  	<textarea class="form-control" name="observacao" rows="7" placeholder="Observações do cliente"><?php echo $resultado['observacao'] ?></textarea>
						</div>
					</div>
					<input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
			  		<div class="col-sm-6">
				  		<div class="form-group">
					  		<button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</button>
							<a href='administrativo.php?link=13&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-info'><i class="fa fa-list"></i> Listar</button></a>	
						</div>
				  	</div>
				  	<p style="color: red; float: right;"> Os campos com * são obrigatórios.</p>
				</form>
			</div>	
		</div> 
	</div>
</div> <!-- /container -->
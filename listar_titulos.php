<?php

    $sql = "SELECT  a.data_lanc, a.tipo_conta, a.data_venc, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, b.id, b.nome
    FROM 
        contas_pr a
    INNER JOIN 
        clientes b on (b.id = a.id_cliente)";
    $resultado = mysqli_query($con, $sql);
    $linhas = mysqli_num_rows($resultado);
?>	
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lista de Contas</h1>
            </div>
        </div>
        <div class="row">
			<div class="col-md-6" style="text-align: left;">
				<a href="administrativo.php?link=38"><button type='button' class='btn btn-success'><i class="fa fa-plus"></i> Lançar</button></a>
				<a href="administrativo.php?link=18"><button type='button' class='btn btn-primary'><i class="fa fa-file-pdf-o"></i> Relatórios</button></a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="dataTable_wrapper">
				  	<table class="table table-striped table-bordered table-hover" id="table-titulos" style="width: 100%">
						<thead>
						 	<tr>
								<th>ID</th>
								<th>NOME</th>
								<th>DATA</th>
								<th>VENCIMENTO</th>
								<th>TIPO</th>
                                <th>VALOR</th>
                                <th>PAGO</th>
								<th>AÇÕES</th>
						  	</tr>
						</thead>
						<tbody>
							<?php 
								while($linhas = mysqli_fetch_array($resultado)){
									
									$data_lanc  = date('d/m/Y', strtotime($linhas['data_lanc']));
									$data_venc  = date('d/m/Y', strtotime($linhas['data_venc']));			
									echo "<tr>";
                                        echo "<td>".$linhas['id_tit']."</td>";
                                        echo "<td>".strtoupper($linhas['nome'])."</td>";
                                        echo "<td>".$data_lanc."</td>";
										echo "<td>".$data_venc."</td>";

										if($linhas['tipo_conta'] == 'P') {
											$linhas['tipo_conta'] = 'PAGAR';
											echo "<td><span style=\"background: #C9302C\" class=\"badge\">".$linhas["tipo_conta"]."</span></td>";
										} else {
											$linhas['tipo_conta'] = 'RECEBER';
											echo "<td><span style=\"background: #449D44\" class=\"badge\">".$linhas["tipo_conta"]."</span></td>";
										}

										echo "<td> R$ ". number_format($linhas['valor_tit'], 2, '.', ',')  ."</td>";
										
										if($linhas['pago'] == 'S') {
											$linhas['pago'] = 'SIM';
											echo "<td><span style=\"background: #449D44\" class=\"badge\">".$linhas['pago']."</span></td>";
										} else {
											$linhas['pago'] = 'NÃO';
											echo "<td><span style=\"background: #C9302C\" class=\"badge\">".$linhas['pago']."</span></td>";
										}
										?>
										<td> 
											<a style="text-decoration: none"  href='administrativo.php?link=39&id=<?php echo $linhas['id_tit']; ?>' title=''>
												<span style="background: #286090;" class="badge">Editar</span>
											</a>

											<a style="text-decoration: none" href='processa/proc_apagar_titulos.php?id=<?php echo $linhas['id_tit']; ?>' title='Excluir'><span style="background: #C9302C;" class="badge">Excluir</span></a>
                                        </td>
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
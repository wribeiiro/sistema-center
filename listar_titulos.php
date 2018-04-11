<?php

    $sql = "SELECT  a.data_lanc, a.data_venc, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, b.id, b.nome
    FROM 
        titulos_rec a
    INNER JOIN 
        clientes b on (b.id = a.id_cliente)";
    $resultado = mysqli_query($con, $sql);
    $linhas = mysqli_num_rows($resultado);
?>	
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lista de Títulos a Receber</h1>
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
								<th>Nome</th>
								<th>Data Lanc</th>
								<th>Data Venc</th>
                                <th>Valor Tit.</th>
                                <th>Pago</th>
								<th>Ações</th>
						  	</tr>
						</thead>
						<tbody>
							<?php 
								while($linhas = mysqli_fetch_array($resultado)){
									$data_lanc   = strtotime($linhas['data_lanc']);
									$ndata_lanc  = date('d/m/Y', $data_lanc);

									$data_venc   = strtotime($linhas['data_venc']);
									$ndata_venc  = date('d/m/Y', $data_venc);

									echo "<tr>";
                                        echo "<td>".$linhas['id_tit']."</td>";
                                        echo "<td>".ucfirst(strtolower($linhas['nome']))."</td>";
                                        echo "<td>".$ndata_lanc."</td>";
                                        echo "<td>".$ndata_venc."</td>";
                                        echo "<td>".$linhas['valor_tit']."</td>";
                                        echo "<td>".$linhas['pago']."</td>";
										?>
										<td> 
											<a href='administrativo.php?link=39&id=<?php echo $linhas['id_tit']; ?>' title='Editar'><button type="button" class="btn btn-primary btn-sm">Editar</button></a>

											<a href='processa/proc_apagar_titulos.php?id=<?php echo $linhas['id_tit']; ?>' title='Excluir'><button type="button" class="btn btn-danger btn-sm">Excluir</button></a>
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
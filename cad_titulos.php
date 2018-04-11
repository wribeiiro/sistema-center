<?php 
    $sql = "SELECT id, nome, situacao FROM clientes ORDER BY nome";
	$query = mysqli_query($con, $sql);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lançar Título</h1>
        </div>
    </div> 
  	<div class="row">
        <div class="panel-body">
            <form class="form" id="form_titulos" method="POST" action="processa/proc_cad_titulos.php">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Cliente:</label><span style="color: red; font-weight: bold;"> *</span>
                        <select class="js-example-basic-single form-control" id="cliente" name="cliente">
                            <?php					  		
                                while($dados = mysqli_fetch_array($query)) { ?>
                                <option value="<?php echo $dados['id'] ?>">
                                    <?php 
                                        echo ucfirst(strtolower($dados['nome'])); 
                                    ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Num documento: </label>
                        <input type="text" class="form-control" name="documento" id="documento" placeholder="Número da nota, ou documento..">
                    </div>
                </div>	
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Forma Pagamento: </label>
                        <input type="text" class="form-control" name="forma_pgto" id="forma_pgto" placeholder="Ex: Dinheiro, Cheque, Cartão..">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Vencimento: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control date" name="data_venc" id="data_venc" placeholder="Ex: 01/01/2020" required="" value="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Pagamento: </label>
                        <input type="text" class="form-control date" name="data_pgto" id="data_pgto" placeholder="Ex: <?php echo date('d/m/Y') ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Valor Título: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control money" name="valor_tit" id="valor_tit" placeholder="0.00" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Valor Pago: </label>
                        <input type="text" class="form-control money" name="valor_pago" id="valor_pago" placeholder="0.00" onchange="diferenca()">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Valor em Aberto: </label>
                        <input type="text" class="form-control money" name="valor_dif" id="valor_dif" placeholder="0.00">
                    </div>
                </div>						
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Observação: </label>
                        <textarea class="form-control" name="observacao" rows="5" placeholder="Observações do cliente"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Lançar</button>
                        <a href='administrativo.php?link=37'><button type='button' class='btn btn-info'><i class="fa fa-list"></i> Listar</button></a>
                        <a href="administrativo.php?link=18"><button type='button' class='btn btn-primary'><i class="fa fa-file-pdf-o"></i> Relatórios</button></a>
                    </div>
                </div>
                <p style="color: red; float: right;"> Os campos com * são obrigatórios.</p>
            </form>
        </div>
	</div>
</div> 
<script> 
    
    function diferenca() {
         
        const valor_titulo = document.getElementById("valor_tit").value;
        const valor_pago   = document.getElementById("valor_pago").value
        const diferenca    = Number(valor_titulo) - Number(valor_pago);
        const ndiferenca   = diferenca.toFixed(2);

        document.querySelector("[name='valor_dif']").value = ndiferenca;
    };
</script>
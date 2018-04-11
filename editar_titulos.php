<?php
    $id = $_GET['id'];
    //Executa consulta

    $sql = "SELECT  a.data_lanc, a.data_venc, a.data_pag, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, a.num_nota, a.forma_pgto, a.observacao, a.valor_pago, a.valor_dif, b.id, b.nome FROM 
        titulos_rec a INNER JOIN clientes b on (b.id = a.id_cliente) WHERE a.id = '$id' LIMIT 1";

    $result = mysqli_query($con, $sql);
    $linhas = mysqli_fetch_assoc($result);
 
    $sqlClie   = "SELECT id, nome, situacao FROM clientes ORDER BY nome";
    $queryClie = mysqli_query($con, $sqlClie);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Título</h1>
        </div>
    </div> 
  	<div class="row">
        <div class="panel-body">
            <form class="form" id="form_titulos" method="POST" action="processa/proc_edit_titulos.php">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Cliente:</label><span style="color: red; font-weight: bold;"> *</span>
                        <select class="js-example-basic-single form-control" id="cliente" name="cliente">
                            <option value="<?= $linhas['id_cliente'] ?>" selected>
                                <?= $linhas['nome'] ?>
                            </option>
                            <?php while($dados = mysqli_fetch_array($queryClie)) { ?>
                                <option value="<?= $dados['id'] ?>">
                                    <?= ucfirst(strtolower($dados['nome'])); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Num documento: </label>
                        <input type="text" class="form-control" name="documento" id="documento" placeholder="Número da nota, ou documento.." value="<?= $linhas['num_nota'] ?>">
                    </div>
                </div>	
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Forma Pagamento: </label>
                        <input type="text" class="form-control" name="forma_pgto" id="forma_pgto" placeholder="Ex: Dinheiro, Cheque, Cartão.." value="<?= $linhas['forma_pgto'] ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Vencimento: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control date" name="data_venc" id="data_venc" placeholder="Ex: 01/01/2020" required="" value="<?= date('d/m/Y', strtotime($linhas['data_lanc'])) ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Pagamento: </label>
                        <input type="text" class="form-control date" name="data_pgto" id="data_pgto" placeholder="Ex: <?= date('d/m/Y') ?>" value="<?php if(!$linhas['data_pag'] == ''): echo date('d/m/Y', strtotime($linhas['data_pag'])); endif;  ?>" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Valor Título: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control money" name="valor_tit" id="valor_tit" placeholder="0.00" value="<?= $linhas['valor_tit'] ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Valor Pago: </label>
                        <input type="text" class="form-control money" name="valor_pago" id="valor_pago" placeholder="0.00" onblur="diferenca()" value="<?= $linhas['valor_pago'] ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Valor em Aberto: </label>
                        <input type="text" class="form-control money" name="valor_dif" id="valor_dif" placeholder="0.00" value="<?= $linhas['valor_dif'] ?>">
                    </div>
                </div>						
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Observação: </label>
                        <textarea class="form-control" name="observacao" rows="5" placeholder="Observações do cliente"><?= $linhas['observacao'] ?></textarea>
                    </div>
                </div>
                <input type="text" class="hidden" value="<?=$linhas['id']?>" name="id">
                <div class="form-group">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</button>
                        <a href='administrativo.php?link=37'><button type='button' class='btn btn-info'><i class="fa fa-list"></i> Listar</button></a>
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
<?php
    $id = $_GET['id'];
    //Executa consulta

    $sql = "SELECT  a.data_lanc, a.data_venc, a.data_pag, a.id AS id_tit, a.id_cliente, a.pago, a.valor_tit, a.forma_pgto, a.observacao, a.valor_pago, a.valor_dif, b.id, b.nome FROM 
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
            <form class="form" id="form_titulos" method="POST" action="processa/proc_cad_titulos.php">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Cliente:</label><span style="color: red; font-weight: bold;"> *</span>
                        <select class="js-example-basic-single form-control" id="cliente" name="cliente">
                            <?php					  		
                                while($dados = mysqli_fetch_array($queryClie)) { ?>
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
                        <input type="text" class="form-control" name="forma_pgto" id="forma_pgto" placeholder="Ex: Dinheiro, Cheque, Cartão.." value="<?php echo $linhas['forma_pgto'] ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Lançamento: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control date" name="data_lanc" id="data_lanc" placeholder="<?php echo date('d/m/Y') ?>" required="" value="<?php echo date('d/m/Y', strtotime($linhas['data_lanc'])) ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Vencimento: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control date" name="data_venc" id="data_venc" placeholder="Ex: 01/01/2020" required="" value="<?php echo date('d/m/Y', strtotime($linhas['data_lanc'])) ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Data Pagamento: </label>
                        <input type="text" class="form-control date" name="data_pgto" id="data_pgto" placeholder="Ex: <?php echo date('d/m/Y') ?>" value="<?php if(!$linhas['data_pag'] == ''): echo date('d/m/Y', strtotime($linhas['data_pag'])); endif;  ?>" >
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pago:</label><span style="color: red; font-weight: bold;"> *</span>
                        <select class="form-control" name="pago">
                            <?php 
                                if ($linhas['pago'] == 'N'):
                                    echo "<option value=\"N\">Não</option>";
                                else:
                                    echo "<option value=\"S\">Sim</option>";
                                endif;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Valor Título: </label> <span style="color: red; font-weight: bold;"> *</span>
                        <input type="text" class="form-control money" name="valor_tit" id="valor_tit" placeholder="0.00" value="<?php echo $linhas['valor_tit'] ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Valor Pago: </label>
                        <input type="text" class="form-control money" name="valor_pago" id="valor_pago" placeholder="0.00" value="<?php echo $linhas['valor_pago'] ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Valor em Aberto: </label>
                        <input type="text" class="form-control money" name="valor_dif" id="valor_dif" placeholder="0.00" value="<?php echo $linhas['valor_dif'] ?>">
                    </div>
                </div>						
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Observação: </label>
                        <textarea class="form-control" name="observacao" rows="5" placeholder="Observações do cliente"><?php echo $linhas['observacao'] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Lançar</button>
                        <a href='administrativo.php?link=37'><button type='button' class='btn btn-info'><i class="fa fa-list"></i> Listar</button></a>
                    </div>
                </div>
                <p style="color: red; float: right;"> Os campos com * são obrigatórios.</p>
            </form>
        </div>
	</div>
</div> 
<script>
    
    jQuery(function($){
        const input = document.querySelector("input[name='valor_tit']");

        input.addEventListener("change", function(){      
            const valor_titulo = $("#valor_tit").val();
            const valor_pago   = $("#valor_pago").val();
            const diferenca    = valor_titulo - valor_pago;

            alert(diferenca);
        });
    });

</script>
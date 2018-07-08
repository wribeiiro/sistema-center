<?php 
    require_once "conexao.php";

    function totalContas($mes, $tipo){          
        global $con;

        $total = 0;
        if (strtoupper($tipo) == 'P'):
            $sql = "SELECT SUM(valor_pago) AS total FROM contas_pr WHERE tipo_conta = 'P' AND MONTH(data_lanc) = {$mes} AND YEAR(data_lanc) = YEAR(CURRENT_DATE) AND (pago = 'S')";
        else:
            $sql = "SELECT SUM(valor_pago) AS total FROM contas_pr WHERE tipo_conta = 'R' AND MONTH(data_lanc) = {$mes} AND YEAR(data_lanc) = YEAR(CURRENT_DATE) AND (pago = 'S')";
        endif;

        $result = mysqli_query($con, $sql);

        if ($result):
            while ($linha = mysqli_fetch_assoc($result)):
                $linha["total"] <= 0 ? 0 : $total = $linha["total"];
            endwhile;
        endif;
 
        return (number_format($total, 2, '.', ','));
    }
?>
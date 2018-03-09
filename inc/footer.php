        </body>
        <!-- jQuery -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="bower_components/raphael/raphael-min.js"></script>
        <script src="bower_components/morrisjs/morris.min.js"></script>
        <script src="js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

        <!-- DataTables JavaScript -->
        <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <script src="js/jquery.maskedinput.js"></script>
        <script src="bower_components/jquery-maskmoney/dist/jquery.maskMoney.js"></script>
        <script src="bower_components/select2/dist/js/select2.js"></script>

        <!--verifica texto combo selecionada jquery-->
        <script>
            $('select#cliente').on('change', function(){
                if( $(this).find('option:selected').text().indexOf('Devendo') > 0) {
                    alert('O cliente está com Pendências! Verifique pagamentos!');
                    window.location = 'administrativo.php?link=11';
                }
            });
        </script>
        <script>
            $(document).ready(function() {

                // datatable plugin

                $('#tableClient').DataTable({
                    responsive: true
                });

                //tooltip
                 $('[data-toggle="tooltip"]').tooltip();

                // select 'combobox digitavel'
                $(".js-example-basic-single").select2();

                // mascaras
                $(".calendario").mask("9999/99/99");
                $("#telefone").mask("(99) 9999-9999");
                $(".dataf").mask("9999/99/99");
                $(".time").mask("99:99:99");

                $("#money").maskMoney();
                $(".money").maskMoney();
            });
        </script>
        <script>
            jQuery(function($){
                var combobox = document.querySelector("select[name='tipo_pessoa']");
                combobox.addEventListener("change",function() {
                    if($(this).val() == "1"){
                        $("#cnpj").mask("999.999.999-99");
                    }else{
                        $("#cnpj").mask("99.999.999/9999-99");
                    }
                });
            });
        </script>
    </body>
</html>
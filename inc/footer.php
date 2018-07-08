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
        <script src="bower_components/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="bower_components/dist/js/sb-admin-2.js"></script>
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

        <!-- DataTables JavaScript -->
        <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <script src="bower_components/js/jquery.maskedinput.js"></script>
        <script src="bower_components/jquery-maskmoney/dist/jquery.maskMoney.js"></script>
        <script src="bower_components/select2/dist/js/select2.js"></script>

        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

        <script>
            $(document).ready(function() {

                // datatable plugin

                $('#tableClient').DataTable({
                    responsive: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });

                $('#table-titulos').DataTable({
                    responsive: true,
                    order: [ 6, 'asc' ],
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });

                // mascaras
                $(".calendario").mask("9999/99/99");
                $("#telefone").mask("(99) 9999-9999");
                $(".date").mask("99/99/9999");
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
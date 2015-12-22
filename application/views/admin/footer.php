<!-- =============================================== -->
            
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2015 
                    <a href="https://www.facebook.com/groups/4tiberseri/">D4ITBERSERI</a>.
                </strong> All rights reserved.
            </footer>
        </div>
        
        <!-- Placed at the end of the document so the pages load faster -->
        
        <!-- jQuery 2.1.4 -->
        <script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?=base_url()?>assets/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=base_url()?>assets/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
            });
        </script>
        <script>
            $('#more').click(function(e) {
                e.stopPropagation();
                $('#tes').css({
                    'height': 'auto'
                })
            });

            $(document).click(function() {
                $('#tes').css({
                    'height': '50px'
                })
            })
        </script>
        
    </body>
</html>
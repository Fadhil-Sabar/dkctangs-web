  <footer class="main-footer dark-mode">
    <strong>Copyright Tugas &copy;<script>var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)</script> <a href="https://www.linkedin.com/in/rafli5876/">Ananda Rafli Juliansyah</a>.</strong>
    All rights reserved.
  </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="<?= base_url() ?>dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
 <script>
  $.widget.bridge('uibutton', $.ui.button)
 </script>
 <script src="<?= base_url() ?>dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?= base_url() ?>dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="<?= base_url() ?>dashboard/tinymce/js/tinymce/tinymce.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/jszip/jszip.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="<?= base_url() ?>dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url() ?>dashboard/dist/js/adminlte.min.js"></script>
 <script src="https://cdn.tiny.cloud/1/pgnww4dori9fglfcml4mkk7n9xp06tsum1tzs84m67fborgo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <!-- Page specific script -->
 <script>
   $(document).ready(function() {
    document.getElementById("year").innerHTML = new Date().getFullYear();
    document.getElementById("years").innerHTML = new Date().getFullYear();
     $('#example1').DataTable({
       dom: 'Bfrtip',
       buttons: [
         'excelHtml5', 'pdfHtml5', 'csvHtml5', 'copy', 'print',
       ],
       // paging: true

     });

     $('#data_pmk').DataTable({
        paging: true,
        searching: true,
        responsive: true,
        autoWidth: false

     });
   });
 </script>

  <script type="text/javascript">
    $(document).ready(function() {

        tinymce.init({
            selector: 'textarea#editor',
            menubar: false,
        });

        $('.custom-file input').change(function(e) {
            $(this).next('.custom-file-label').html(e.target.files[0].name);
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

    });
  </script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="dist/js/adminlte.js"></script>

 </body>

 </html>
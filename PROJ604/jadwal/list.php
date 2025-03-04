<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Jadwal</h1>
    <p class="mb-4">DataTables adalah plugin pihak ketiga yang digunakan untuk menghasilkan tabel demo di bawah ini.
        Untuk informasi lebih lanjut tentang DataTables, silakan kunjungi 
        <a target="_blank" href="https://datatables.net">dokumentasi resmi DataTables</a>.</p>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data jadwal</h6>
        </div>
        <div class="card-body">
            <button class="btn btn-info btn-user" id="addjadwal" style="margin-bottom: 30px;">Tambah</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Jadwal</th>
                            <th>hari</th>
                            <th>waktu</th>
                            <th>Ruangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Ruangan</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        include "../db.php";
                        $data = $con->query("SELECT * FROM tjadwal");
                        $no = 1;
                        while ($result = $data->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['hari']; ?></td>
                            <td><?php echo $result['waktu']; ?></td>
                            <td><?php echo $result['ruangan']; ?></td>
                            <td>
                                <button class="btn btn-success btn-user" id="editjadwal" value="<?php echo $result['id']; ?>">Edit</button>
                                <button class="btn btn-danger btn-user" id="deletejadwal" value="<?php echo $result['id']; ?>">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>

<script>
$(document).ready(function(){
    $("#addjadwal").click(function(){
        $.ajax({
            url : 'jadwal/add.php',
            type : 'get',
            success: function(data) {
                $("#contentData").html(data);
            }
        });
    });
});
</script>

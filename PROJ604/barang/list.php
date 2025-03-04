<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
    <p class="mb-4">DataTables adalah plugin pihak ketiga yang digunakan untuk menghasilkan tabel demo di bawah ini.
        Untuk informasi lebih lanjut tentang DataTables, silakan kunjungi 
        <a target="_blank" href="https://datatables.net">dokumentasi resmi DataTables</a>.</p>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <button class="btn btn-info btn-user" id="addBarang" style="margin-bottom: 30px;">Tambah</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        include "../db.php";
                        $data = $con->query("SELECT * FROM tbarang");
                        $no = 1;
                        while ($result = $data->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['nama']; ?></td>
                            <td><?php echo $result['deskripsi']; ?></td>
                            <td>
                                <button class="btn btn-success btn-user" id="editBarang" value="<?php echo $result['id']; ?>">Edit</button>
                                <button class="btn btn-danger btn-user" id="deleteBarang" value="<?php echo $result['id']; ?>">Delete</button>
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
    $("#addBarang").click(function(){
        $.ajax({
            url : 'barang/add.php',
            type : 'get',
            success: function(data) {
                $("#contentData").html(data);
            }
        });
    });
});
</script>

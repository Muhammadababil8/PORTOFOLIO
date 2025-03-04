<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                include "../db.php";
                $id = $_GET['id'];
                $barang = $con->query("select * from tbarang where id = '$id'");
                $row = $barang->fetch_array();
                ?>
                <form method="POST" id="formEditBarang">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id Barang</label>
                        <input type="type" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
</div>
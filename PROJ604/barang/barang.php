<?php
include "../db.php";
switch ($_GET['action'])
{
    case 'save':

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        $cek=$con->query("select * from tbarang where id='$id'");
        if($cek->num_rows>0){
            $data=1;
        }else{
            $query = $con->query("insert into tbarang(id,nama,deskripsi) values('$id','$nama','$deskripsi')");
            $data=0;
        }
        echo $data;

break;
case 'edit':
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $query = $con->query("UPDATE tbarang SET nama='$nama', deskripsi='$deskripsi' WHERE id='$id'");
    if($query){
        echo "Edit Data Berhasil:";
    }else{
        echo "Edit Data Gagal:";
    }
break;
case 'delete':
    $id = $_POST['id'];
    $query = $con->query("delete from tbarang where id='$id'");
    if($query){
        echo "Hapus Data Berhasil";
    }else{
        echo "Hapus Data Gagal";
    }
break;
}
?>
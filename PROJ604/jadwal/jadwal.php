<?php
include "../db.php";
switch ($_GET['action'])
{
    case 'save':

        $id = $_POST['id'];
        $hari = $_POST['hari'];
        $waktu = $_POST['waktu'];
        $ruangan =$_POST['ruangan'];

        $cek=$con->query("select * from tjadwal where id='$id'");
        if($cek->num_rows>0){
            $data=1;
        }else{
            $query = $con->query("insert into tjadwal(id,hari,waktu,Ruangan) values('$id','$hari','$waktu','$ruangan')");
            $data=0;
        }
        echo $data;

break;
case 'edit':
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];
    $ruangan =$_POST['ruangan'];
    $query = $con->query("UPDATE tbarang SET nama='$nama', deskripsi='$deskripsi' WHERE id='$id'");
    if($query){
        echo "Edit Data Berhasil:";
    }else{
        echo "Edit Data Gagal:";
    }
break;
case 'delete':
    $id = $_POST['id'];
    $query = $con->query("delete from tjadwal where id='$id'");
    if($query){
        echo "Hapus Data Berhasil";
    }else{
        echo "Hapus Data Gagal";
    }
break;
}
?>
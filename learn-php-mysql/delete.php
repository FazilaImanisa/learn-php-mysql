<?php
include './connection.php';

$id_anggota = $_GET['id_anggota'];

$sql = "delete from anggota where id_anggota = '".$id_anggota."'";

$result = mysqli_query($connect,$sql);

if($result){
    //redirect ke halaman list anggota
    header('Location:list-anggota.php');
}else{
    printf('Gagal ya'.mysqli_error($connect));
    exit();
}
?>
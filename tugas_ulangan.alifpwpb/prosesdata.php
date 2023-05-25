<?php

include 'DB.php';

$db = new DB();

$data_akun = $db->query("SELECT * FROM student");

if(isset($_REQUEST['tambah']))
{
    $id = $_REQUEST['id'];
    $nama = $_REQUEST['nama'];
    $nim = $_REQUEST['nim'];
    $jurusan = $_REQUEST ['jurusan'];
    $db->query("INSERT INTO student VALUES ('$id', '$nama', '$nim','$jurusan')");
    header('Location: tampil.php');
}

if(isset($_REQUEST['delete']))
{
    $id = $_REQUEST['delete'];
    $db->query("DELETE FROM student WHERE id=$id");
    header('Location: tampil.php');
}

if(isset($_REQUEST['update']))
{
    $id = $_GET['id_key'];
    $nama = $_REQUEST['nama'];
    $nim = $_REQUEST['nim'];
    $jurusan = $_REQUEST['jurusan'];
    $db->query("UPDATE student SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id");
    header('Location: tampil.php');
}

if(isset($_GET['id_key']))
{
    $id = $_GET['id_key'];
    $data = $db->cariId($id);
}
?>
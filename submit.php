<?php
include_once("koneksi.php");
include("bantu.php");
$helper = new bantu();
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $action = isset($_GET['action']) ? $_GET['action'] : null;
    if ($action == 'ubah') {
        # code...
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $class = isset($_POST['class']) ? $_POST['class'] : null;
        $q = mysqli_query($koneksi,"UPDATE users SET name='$name', class='$class' WHERE id='$id'");

        return $helper->redirect('index.php');
    }elseif ($action == 'hapus') {
        # code...
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $class = isset($_POST['class']) ? $_POST['class'] : null;

        $q = mysqli_query($koneksi,"DELETE from users WHERE id='$id'");
        return $helper->redirect('index.php');
    }
?>
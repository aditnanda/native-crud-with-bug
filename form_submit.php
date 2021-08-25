<?php
include_once("koneksi.php");
include_once("bantu.php");
$helper = new bantu();
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $action = isset($_GET['action']) ? $_GET['action'] : null;

    if ($action == 'ubah') {
        # code...
        $q = mysqli_query($koneksi,"SELECT * from users WHERE id='$id'");
        $row = mysqli_fetch_assoc($q);
        $name = isset($row['name']) ? $row['name'] : null;
        $class = isset($row['class']) ? $row['class'] : null;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="submit.php?action=ubah&id=<?= $id ?>" method="post">
        <input type="text" name="name" value="<?= $name ?>">
        <input type="text" name="class" value="<?= $class ?>">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
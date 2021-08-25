<?php
include_once('koneksi.php');

$q = mysqli_query($koneksi, "SELECT * FROM users");
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
    <a href="form_submit.php">Tambah Data</a>
   <table>
       <thead>
           <tr>
               <th>Nama</th>
               <th>Kelas</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
       <?php
        while ($row = mysqli_fetch_assoc($q)) { 
        ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['class'] ?></td>
                <td>
                    <a href="form_submit.php?action=ubah&id=<?= $row['id'] ?>">Ubah</a>
                    <a href="submit.php?action=hapus&id=<?= $row['id'] ?>">Hapus</a>
                </td>
            </tr>

        <?php
        }
        ?>
       </tbody>
   </table>
</body>
</html>
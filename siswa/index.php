<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Daftar siswa</title>
    <link rel="shortcut icon" href="../gambar/pesat.jpg" type="image/-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3"> 
    <table class="table table-striped table-hover">
        <h1>
            <img scr="../gambar/pesat.jpg">
            Data Siswa
        </h1>
        <a href="../" class="btn btn-primary" style="float: right;">Kembali</a><br></br>
        <a href="add.php" class="btn btn-primary" style="float: right;">Tambah data</a><br></br>
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
        </thead>
        <tbody>
            <?php
                require_once("../config.php");
                $sql  ="SELECT kelas.kelas, siswa.id as sid, siswa.nis, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir FROM siswa JOIN kelas ON siswa.kelas_id = kelas.id";
                //$sql = "SELECT * FROM siswa";
                $query=mysqli_query($config, $sql);
                if(mysqli_num_rows($query) > 0){
                    $no=1;
                    while($r=mysqli_fetch_assoc($query)){
                        echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $r['nis'] ."</td>";
                            echo "<td>" . $r['nama'] ."</td>";
                            echo "<td>" . $r['tempat_lahir'] ."</td>";
                            echo "<td>" . date('d-M-Y' , strtotime($r['tanggal_lahir'])) ."</td>";
                            echo "<td>" . $r['kelas'] . "</td>";
                            $no++;
                            echo "<td>
                                <a href='edit.php?id=" . $r['sid'] . "' class='btn btn-warning btn-sm'>Edit</a>"; ?>
                                <a href="hapus.php?id=<?= $r['sid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data Siswa akan dihapus, Yakin?')">Hapus</a>
                                <?php
                             echo "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody> 
   
    </table>
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
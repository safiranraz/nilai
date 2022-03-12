<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="shortcut icon" href="../gambar/pesat.jpg" type="image/-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar siswa</title>
</head>
<body>
    <div class="container mt-3"> 
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <img scr="../gambar/pesat.jpg" height="100px">
                    Data Siswa
                </h1>
                <hr>
                <a href="index.php" class="btn btn-primary" style="float: right;">Kembali</a><br></br>
            <div>
            <form action="save.php" method="post">
                <div class="mb-2">
                    <label for="nis" class="form-label">Nomor Induk Siswa*</label>
                    <input type="number" name="nis" class="form-control" required autofocus>
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Siswa*</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir (Kabupaten/Kota)</label>
                    <input type="text" name="tempat_lahir" class="form-control" required autofocus>
                </div>
                <div class="mb-2">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" required class="form-control" required>
                        <option value="">Pilih Kelas</option>
                        <?php
                        require_once('../config.php');
                        $sql = "SELECT * FROM kelas";
                        $result = mysqli_query($config, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['kelas'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <input type="reset" class= "btn btn-md btn-warning">
                    <button type="submit" name="simpan" class= "btn btn-md btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
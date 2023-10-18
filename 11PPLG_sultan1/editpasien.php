<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <div class="row mt-3">
        <div class="col-4">
            <h3>Edit Data Pasien</h3>
            <?php
            include 'koneksi.php';
            $panggil = $koneksi->query ("SELECT * FROM pasien where idPasien='$_GET[edit]'");
            
            while ($row = $panggil->fetch_assoc()) {
            ?>
             <form action="koneksi.php" method="POST">
                <div class="form-group">
                    <label for="idPasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID pasien" value="<?= $row['idPasien'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nmPasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama pasien" value="<?= $row['nmPasien'] ?>">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check">
                    <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if (($row['jk']) ==="Perempuan") {
                        echo "checked";
                    }?>>perempuan
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jk" value="Laki-Laki" <?php if (($row['jk']) ==="Laki-Laki") {
                        echo "checked";
                    }?>>Laki-Laki
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"<?= $row['alamat'] ?>></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="edit" class="form-control btn btn-primary">
                </div>
                </div>
             </form>      
            <?php } ?>
        </div>
    </div>
   </div>
  </body>
</html>
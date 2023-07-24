<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Lokasi Kampus</title>
</head>

<body>
    <h1>Edit Lokasi Kampus</h1>

    <form action="<?= site_url('lokasi/update/' . $lokasi['id_lokasi']) ?>" method="post">
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="<?= $lokasi['alamat'] ?>" class="form-control" required>
        <br>
        <label for="kota">Kota:</label>
        <input type="text" name="kota" id="kota" value="<?= $lokasi['kota'] ?>" class="form-control" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Lokasi Kampus</title>
</head>

<body>
    <h1>Data Lokasi Kampus</h1>

    <a href="<?= site_url('lokasi/create') ?>"><button type="button" class="btn btn-primary">Tambah Lokasi</button></a>

    <table class="table table-succes table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lokasi as $key => $row) : ?>
                <tr>
                    <!-- <td><?= $row['id_lokasi']; ?></td> -->
                    <td><?= $key + 1 ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['kota']; ?></td>
                    <td>
                        <a href="<?= site_url('lokasi/edit/' . $row['id_lokasi']) ?>"><button type="button" class="btn btn-success">Edit</button></a>
                        <!-- <a href="<?= site_url('lokasi/delete/' . $row['id_lokasi']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Hapus</button></a> -->
                        <a href="<?= site_url('lokasi/delete/' . $row['id_lokasi']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>

    <title>Data Lokasi Kampus</title>
</head>

<body>
    <h1>Data Lokasi Kampus</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Alamat</th>
                <th>Kota</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lokasi as $row) : ?>
                <tr>
                    <td><?= $row['id_lokasi']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['kota']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>
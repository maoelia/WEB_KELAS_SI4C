<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran UKM</title>
</head>
<body>
    <h1>Data Pendaftaran UKM</h1>
    <p><a href="daftar.php">Daftar</a></p>
    <table border="1">
        <tr>
            <td>No</td>
            <td>NPM</td>
            <td>Nama</td>
            <td>UKM</td>
            <td>Terdaftar Pada</td>
            <td>Aksi</td>
        </tr>

        <?php
        include("koneksi.php");
        $perintah = "SELECT * FROM tbl_pendaftaran";
        $eksekusi = mysqli_query($conn, $perintah);

        if($eksekusi){
            $i=1;
            while($ambildata = mysqli_fetch_array($eksekusi)){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $ambildata["npm"]; ?></td>
                    <td><?php echo $ambildata["nama"]; ?></td>
                    <td><?php echo $ambildata["ukm"]; ?></td>
                    <td><?php echo $ambildata["created_at"]; ?></td>
                    <td>
                        <a href="ubah.php">Ubah</a>
                        <a href="proses-hapus.php">Hapus</a>
                    </td>
                </tr>
                <?php
                $i++;
            }
            $eksekusi->free_result();
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
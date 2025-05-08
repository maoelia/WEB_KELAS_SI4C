<?php
    // Disini kita tangkap 3 variabel yang dikirim
    // dari halaman index.php
    $tangkap_npm = $_POST["var_npm"];
    $tangkap_nama = $_POST["var_nama"];
    $tangkap_ukm = $_POST["var_ukm"];
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Mahasiswa Terdaftar</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>NPM:</strong> <?php echo $tangkap_npm; ?></li>
            <li class="list-group-item"><strong>Nama:</strong> <?php echo $tangkap_nama; ?></li>
            <li class="list-group-item"><strong>UKM:</strong> <?php echo $tangkap_ukm; ?></li>
        </ul>

                <div class="card-footer">
                    <a href="index.php" class="btn btn-danger">Kembali</a>
                </div>
    </div>
</div>


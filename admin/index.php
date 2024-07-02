<?php

include "../koneksi.php";

// SQL query to fetch data from data_kos table
$sql = "SELECT * FROM data_kos";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../public/admin/assets/css/style.css" />
</head>

<body>
    <div class="wrapper">
        <?php @include('navbar.php'); ?>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="/assets/Image/account.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="container">

                <h3 class="fw-bold fs-4 mb-3">Data Kost</h3>
                <section class="p-3">
                    <div class="row">
                        <div class="pb-3">
                            <button class="btn btn-primary newKos" data-bs-toggle="modal" data-bs-target="#kosForm">+
                                Tambah Kost <i class="bi bi-house-door"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-3 text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Kost</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Jumlah Kamar</th>
                                        <th>Luas</th>
                                        <th>Kamar Mandi</th>
                                        <th>Kasur</th>
                                        <th>TV</th>
                                        <th>AC</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="kosData">
                                    <?php
                                    if ($result->num_rows > 0) {
                                        $count = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $count . "</td>";
                                            echo "<td><img src='assets/Image/Kos/" . $row['gambar_kos'] . "' alt='Gambar Kost'></td>";
                                            echo "<td>" . $row['namakos'] . "</td>";
                                            echo "<td>" . $row['alamatkos'] . "</td>";
                                            echo "<td>" . $row['harga'] . "</td>";
                                            echo "<td>" . $row['jumlahkamar'] . "</td>";
                                            echo "<td>" . $row['luas'] . "</td>";
                                            echo "<td>" . $row['km'] . "</td>";
                                            echo "<td>" . $row['kasur'] . "</td>";
                                            echo "<td>" . $row['tv'] . "</td>";
                                            echo "<td>" . $row['ac'] . "</td>";
                                            echo "<td>
                                        <button class='btn btn-sm btn-primary'>Edit</button>
                                        <button class='btn btn-sm btn-danger'>Hapus</button>
                                      </td>";
                                            echo "</tr>";
                                            $count++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='12'>Tidak ada data tersedia</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <div class="modal fade" id="kosForm">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Kost Baru</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="kosForm" enctype="multipart/form-data">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="gambar_kos" class="form-label">Gambar Kost:</label>
                                            <input type="file" class="form-control" id="gambar_kos" accept="image/*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="namakos" class="form-label">Nama Kost:</label>
                                            <input type="text" class="form-control" id="namakos" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="alamatkos" class="form-label">Alamat Kost:</label>
                                            <input type="text" class="form-control" id="alamatkos" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="harga" class="form-label">Harga:</label>
                                            <input type="text" class="form-control" id="harga" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="jumlahkamar" class="form-label">Jumlah Kamar:</label>
                                            <input type="number" class="form-control" id="jumlahkamar" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="luas" class="form-label">Luas Kamar (misal: 3x4):</label>
                                            <input type="text" class="form-control" id="luas" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="km" class="form-label">Kamar Mandi:</label>
                                            <select class="form-select" id="tv" required>
                                                <option value="Ya">Dalam</option>
                                                <option value="Tidak">Luar</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="kasur" class="form-label">Jenis Kasur:</label>
                                            <input type="text" class="form-control" id="kasur" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tv" class="form-label">TV:</label>
                                            <select class="form-select" id="tv" required>
                                                <option value="Ya">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="ac" class="form-label">AC:</label>
                                            <select class="form-select" id="ac" required>
                                                <option value="Ya">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" form="kosForm" class="btn btn-primary submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/admin/assets/js/script.js"></script>
</body>

</html>
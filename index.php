<?php
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

if (isset($_POST['submit'])) {
    // ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // isi dengan HTML yang akan di convert ke PDF
    $html = '<h1>' . $nama . '</h1>';
    $html .= '<p>' . $alamat . '</p>';

    $dompdf = new Dompdf();

    // isi yang akan ditampilkan
    $dompdf->loadHtml($html);

    // setting ukuran kertas dan orientasi
    $dompdf->setPaper('A4', 'landscape');

    // render dari html ke pdf
    $dompdf->render();

    // output pdf ke browser
    $dompdf->stream('dompdf.pdf');
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>dompdf</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>dompdf</h1>
                <!-- form nama dan laporan -->
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>
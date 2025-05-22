<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pekerjaan576 = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';
    $penghasilan576 = isset($_POST['penghasilan']) ? $_POST['penghasilan'] : '';
    $jumlah576 = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    $alamat576 = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $nomor576 = isset($_POST['nomor']) ? $_POST['nomor'] : '';

    $response = [
        "pekerjaan576" => $pekerjaan576,
        "penghasilan576" => $penghasilan576,
        "jumlah576" => $jumlah576,
        "alamat576" => $alamat576,
        "nomor576" => $nomor576
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Metode tidak diizinkan"]);
}
?>
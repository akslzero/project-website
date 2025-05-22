<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $sekolah579 = isset($_GET['sekolah']) ? $_GET['sekolah'] : '';
    $alamat579 = isset($_GET['alamat']) ? $_GET['alamat'] : '';
    $masuk579 = isset($_GET['masuk']) ? $_GET['masuk'] : '';
    $jurusan579 = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';
    $ipk579 = isset($_GET['ipk']) ? $_GET['ipk'] : '';
    $nomor579 = isset($_GET['nomor']) ? $_GET['nomor'] : '';
    $file579 = isset($_GET['file']) ? $_GET['file'] : '';

    $response = [
        "sekolah579" => $sekolah579,
        "alamat579" => $alamat579,
        "masuk579" => $masuk579,
        "jurusan579" => $jurusan579,
        "ipk579" => $ipk579,
        "nomor579" => $nomor579,
        "file579" => $file579
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Metode tidak diizinkan"]);
}
?>
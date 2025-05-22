<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama578 = isset($_POST['nama']) ? $_POST['nama'] : '';
    $jk578 = isset($_POST['jk']) ? $_POST['jk'] : '';
    $notlp578 = isset($_POST['notlp']) ? $_POST['notlp'] : '';
    $email578 = isset($_POST['email']) ? $_POST['email'] : '';
    $ttl578 = isset($_POST['ttl']) ? $_POST['ttl'] : '';
    $alamat578 = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    $response = [
        "nama578" => $nama578,
        "jk578" => $jk578,
        "notlp578" => $notlp578,
        "email578" => $email578,
        "ttl578" => $ttl578,
        "alamat578" => $alamat578
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Metode tidak diizinkan"]);
}
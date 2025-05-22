<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .list-container {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeDown 0.5s forwards;
        }

        @keyframes fadeDown {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .list-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }
        .list-container ul {
            list-style: none;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        .list-container ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-weight: 400;
            font-family: 'Poppins', sans-serif;
        }
        .list-container ul li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="list-container">
        <h2>Daftar Persyaratan</h2>
        <ul>
            <li>Pengajuan beasiswa, minimal mahasiswa semester II dan maksimal semester VIII</li>
            <li>Indeks Prestasi Kumulatif (IPK) minimal 3.00</li>
            <li>Memiliki potensi akademik baik, namun terkendala secara ekonomi</li>
            <li>Belum pernah menerima bantuan beasiswa dari lembaga lain</li>
            <li>Berstatus WNI</li>
        </ul>
    </div>
    
</body>
</html>
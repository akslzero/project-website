<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = [];
    }

    $kodePrefix = "ROMANX";
    $kodePendaftaran = count($_SESSION['data']) + 1;

    $row = "<tr>";
    $row .= "<td>" . htmlspecialchars($_POST['nama']) . "</td>";
    $row .= "<td>" . $kodePrefix . str_pad($kodePendaftaran, 3, '0', STR_PAD_LEFT) . "</td>";
    for ($i = 1; $i <= 5; $i++) {
        $fileKey = 'file' . $i;
        if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] == UPLOAD_ERR_OK) {
            $row .= "<td>" . htmlspecialchars($_FILES[$fileKey]['name']) . "</td>";
        } else {
            $row .= "<td>No file uploaded</td>";
        }
    }
    $row .= "</tr>";

    $_SESSION['data'][] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Seleksi Berkas</title>
    <script src="jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-left: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
            font-family: 'Poppins', sans-serif;
        }
        
        #searchBar578 {
            width: 100%;
            max-width: 400px;
            padding: 10px 20px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }
            #searchBar578:focus {
            border-color: #5a67d8;
            box-shadow: 0 4px 12px rgba(90, 103, 216, 0.3);
            outline: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-family: 'Poppins', sans-serif;
        }
        th {
            background-color: #5a67d8;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        
        h1 {
            text-align: right;
            font-family: 'Poppins', sans-serif;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            margin-left: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .gaya {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
            margin-left: 10px;
        }
        
    </style>
</head>
<body>
    <div class="header-container">
        <h1>DAFTAR SELEKSI BEASISWA ROMAN 2025</h1>
        <input type="text" id="searchBar578" placeholder="Search...">
    </div>
    <table id="fileTable578">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kode Pendaftaran</th>
                <th>Berkas 1</th>
                <th>Berkas 2</th>
                <th>Berkas 3</th>
                <th>Berkas 4</th>
                <th>Berkas 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['data'])) {
                foreach ($_SESSION['data'] as $dataRow) {
                    echo $dataRow;
                }
            }
            ?>
        </tbody>
    </table>

    <button class="gaya" id="TambahAttr578">Tambah attr</button>
    <button class="gaya" id="HapusAttr578">Hapus attr</button>
    <script>
        $(document).ready(function() {
            $('#searchBar578').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#fileTable578 tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            $("#TambahAttr578").click(function(){
                $("tbody").attr({
                    "style" : "background-color: #5a67d8; color: white;",
                    "title" : "Tabel_seleksi578"
            });
        });


            $("#HapusAttr578").click(function() {
                $("tbody").attr({
                    "style" : "background-color:rgb(255, 255, 255);color: black;",
                    "title" : "Tabel_seleksi578"
                });
                
            });
        });
    </script>
</body>
</html>
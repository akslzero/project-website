<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input File</title>
    <script src="jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
       
       .form-container {
            width: 80%;
            margin: auto;
            margin-top: 80px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
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
        .form-container h2 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 24px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }
        .form-container input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: 'Poppins', sans-serif;
        }
        .form-container .file-input-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }
        .form-container .file-input-container span {
            display: inline-block;
            width: 300px;
            vertical-align: top;
            font-family: 'Poppins', sans-serif;
        }
        .form-container .file-input-container input[type="file"] {
            font-family: 'Poppins', sans-serif;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #5a67d8;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin: auto;
            margin-top: 20px;
        }
        .form-container button:hover {
            background-color: #5a67d8;
        }

        .form-container p {
            text-align: center;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Seleksi Berkas Online</h2>
        <p>Silahkan uploud berkas sesuai ketentuan, berkas bisa difoto atau upload softcopy</p>
        <form id="fileForm578" enctype="multipart/form-data">
            <input type="text" name="nama" placeholder="Nama"><br>
            <div class="file-input-container">
                <span>Surat Permohonan Pengajuan Beasiswa</span>
                <input type="file" name="file1">
            </div>
            <div class="file-input-container">
                <span>Transkip Nilai Akhir (KHS / Rapor IPK )</span>
                <input type="file" name="file2">
            </div>
            <div class="file-input-container">
                <span>Surat keterangan aktif mahasiswa</span>
                <input type="file" name="file3">
            </div>
            <div class="file-input-container">
                <span>Bukti prestasi atau penghargaan (jika ada)</span>
                <input type="file" name="file4">
            </div>
            <div class="file-input-container">
                <span>Foto KTP dan KK</span>
                <input type="file" name="file5">
            </div>
            <button type="button" id="submitBtn578">Kirim</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#submitBtn578').click(function() {
                var formData = new FormData($('#fileForm578')[0]);
                var allFilesFilled = true;
                
                $('#fileForm578 input[type="file"]').not('[name="file4"]').each(function() {
                    if ($(this).get(0).files.length === 0) {
                        allFilesFilled = false;
                        return false; // Break the loop
                    }
                });

                if (!allFilesFilled) {
                    alert('Harap lengkapi berkas');
                    return;
                }

                $.ajax({
                    url: 'hasil_seleksi578.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert('Berkas berhasil dikirim');
                    }
                });
            });
        });
    </script>
</body>
</html>
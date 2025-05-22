<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <script src="jquery.js"></script>
    <script src="formulir_pendaftaran.js"></script>
    <link rel="stylesheet" href="css/styleformkel5.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .progress-bar {
            width: 100%;
            background: #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }
        .progress-bar div {
            height: 10px;
            width: 0%;
            background:rgb(0, 255, 110);
            transition: width 0.3s ease-in-out;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .output-table {
            width: 80%; 
            margin: auto;
            border-collapse: collapse;
        }
        .output-table th, .output-table td {
            padding: 8px; 
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .output-table th {
            background-color: #5a67d8;
            color:rgb(255, 255, 255);
        }
      
        
    </style>
</head>
<body>
    <div class="form-container">
        <div class="progress-bar">
            <div id="progress"></div>
        </div>
        <form id="multiStepForm">
            <div class="form-step active" id="step1">
                <h2>Form Biodata</h2>
                <table>
                    <tr><td>Nama Lengkap</td><td><input type="text" id="nama_578" name="nama" ></td></tr>
                    <tr><td>Jenis Kelamin</td>
                    <td>
                        <select id="jk_578" name="jk_578">
                            <option>Laki - Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </td></tr>
                    <tr><td>Nomor Telepon</td><td><input id="notlp_578" type="number" name="nik" ></td></tr>
                    <tr><td>Email</td><td><input id="email_578" type="text" name="tempat_lahir" ></td></tr>
                    <tr><td>Tanggal Lahir</td><td><input id="ttl_578" type="date" name="tanggal_lahir" ></td></tr>
                    <tr><td>Alamat Lengkap (Yang ditinggali sekarang)</td><td><input type="text" id="alamat_578" name="alamat" ></td></tr>
                    <tr>
                    <td>NIK atau No. KTP </td>
                    <td><input type="text" id="nik_578" name="nik_578"></td></tr>

                </table>
                <input type="button" class="btn reset" value="Reset Tabel">
                <input type="button" class="btn next" value="Lanjut">
                <input type="button" class="btn" id="kirim_578" value="Kirim">
                
<br><br>
                <input id="search578" type="text" class="search-bar" placeholder="Search..">
                <table class="output-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Nomer Telepon</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody id="dataTable578">
           
        </tbody>
    </table>

            </div>
            <div class="form-step" id="step2">
                <h2>Form Keluarga</h2>
                <table>
                <tr>
                    <td>Pekerjaan Orang Tua/Wali</td>
                    <td><input type="text" id="pekerjaan_576" name="pekerjaan_576"></td>
                </tr>
                <tr>
                    <td>Penghasilan Orang Tua/Wali per bulan</td>
                    <td>
                        <select id="penghasilan_576" name="penghasilan_576">
                            <option value="Kurang Dari 1jt"><1.000.000</option>
                            <option value="Lebih Dari 1jt">>1.000.000</option>
                            <option value="Lebih dari 5jt">>5.000.000</option>
                            <option value="Lebih dari 10jt">>10.000.000</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Tanggungan dalam Keluarga</td>
                    <td id="jml_576">
                        <input type="radio" value="1" name="jml_576">1
                        <input type="radio" value="2" name="jml_576">2
                        <input type="radio" value="3" name="jml_576">3
                        <input type="radio" value=">3" name="jml_576">>3
                    </td>
                </tr>
                <tr>
                    <td>Alamat Orang Tua</td>
                    <td><input type="text" id="alamat_576" name="alamat_576"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon Orang Tua</td>
                    <td><input type="number" id="nomor_576" name="nomor_576"></td>
                </tr>
                </table>
                <input type="button" class="btn reset" value="Reset Tabel">
                <input type="button" class="btn prev" value="Sebelumnya">
                <input type="button" class="btn next" value="Lanjut">
                <input type="button" class="btn" id="kirim_576" value="Kirim">

                <br><br>
                <input id="search576" type="text" class="search-bar" placeholder="Search..">
                <table class="output-table">
        <thead>
            <tr>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th>Jumlah Tanggungan</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        
        <tbody id="dataTable576">

        </tbody>
    </table>
            </div>


            <div class="form-step" id="step3">
                <h2>Form Akademik</h2>
                <table>
                    <tr><td>Nama Kampus</td><td><input type="text" id="sekolah_579" name="sekolah_asal" ></td></tr>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td><input type="text" id="al_579" name="al_579"></td>
                </tr>
                <tr>
                    <td>Tahun Masuk</td>
                    <td><input type="number" id="th_579" name="th_579"></td>
                </tr>
                <tr>
                    <td>Jurusan/prodi</td>
                    <td><input type="text" id="jr_579" name="jr_579"></td>
                </tr>
                <tr>
                    <td>IPK Semester sebelumnya</td>
                    <td><input type="number" id="ipk_579" name="ipk_579"></td>
                </tr>
                <tr>
                    <td>Nomer Induk Mahasiswa</td>
                    <td><input type="number" id="nim_579" name="nim_579"></td>
                </tr>
                <tr>
                    <td>Upload Foto atau Softcopy KTM</td>
                    <td><input type="file" id="file_579" name="file_579"></td>
                </tr>
                </table>
                <input type="button" class="btn reset" value="Reset Tabel">
                <input type="button" class="btn prev" value="Sebelumnya">
                <input type="button" class="btn" id="kirim_579" value="Kirim">

                
                <br><br>
                <input id="search579" type="text" class="search-bar" placeholder="Search..">
                <table class="output-table">
        <thead>
            <tr>
                <th>Nama Kampus</th>
                <th>Alamat</th>
                <th>Tahun Masuk</th>
                <th>Jurusan/prodi</th>
                <th>Ipk</th>
                <th>Nomer Induk</th>
                <th>File</th>
            </tr>
        </thead>
        
        <tbody id="dataTable579">

        </tbody>
    </table>
            </div>
        </form>
    </div>
    
    </body>
    </html>
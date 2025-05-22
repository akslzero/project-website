<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylekelompok5.css">
    <link href="aos-master/dist/aos.css" rel="stylesheet">
    <title>ROMAN</title>
    <script src="jquery.js"></script>
    <script src="video/script.js"></script>
    
</head>

<body>
    <div>
        <header>
            <div class="logo">
                <img src="img/logo.png" alt="Logo" style="width:50px;height:50px;">
            </div>
            <div style="font-size:large">PENDAFTARAAN BEASISWA ROMAN 2025</div>
        </header>
        <nav>
            <ul>
                <li><a href="">Beranda</a></li>
                <li><a href="#" class="nav-link" data-page="persyaratan">Persyaratan</a></li>
                <li><a href="#" class="nav-link" data-page="menugaleri">Galeri</a></li>
                <li><a href="#" class="nav-link" data-page="Formulir-pendaftaran">Daftar Beasiswa</a></li>
                <li><a href="#" class="nav-link" data-page="seleksi_berkas">Seleksi Berkas</a></li>
                <li><a href="#" class="nav-link" data-page="hasil_seleksi578">Daftar Seleksi</a></li>
                <li><a href="#" class="nav-link" data-page="kontak">Kontak</a></li>
            </ul>
        </nav>
    </div>

    <div class="judulkel5" id="judulkel5">
        <h1 data-aos="fade-up" data-aos-duration="1000">SELAMAT DATANG</h1>
        <button data-aos="zoom-out-down" data-aos-duration="1000" onclick="window.location.href='login/login.php'" class="button1">LOGIN</button> 
    </div>

    <div class="isian">
        <div class="tentangkel5" id="tentangkel5">
        <div class="isi-tentang">
            <h1 data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine">Apa Itu Beasiswa ROMAN?</h1><br>
            <p data-aos="fade-down" data-aos-duration="1000">Beasiswa ROMAN adalah program yang dirancang untuk membantu mahasiswa berprestasi dan dari berbagai latar belakang yang membutuhkan, dengan memberikan pembiayaan penuh atas biaya kuliah dan biaya hidup selama masa pendidikan. Melalui beasiswa ROMAN, kami berkomitmen untuk memberikan kesempatan yang setara kepada mahasiswa yang berpotensi untuk menyelesaikan pendidikan tinggi, dengan memberikan dukungan finansial, termasuk biaya kuliah dan fasilitas lainnya.</p>
        </div>
    </div>

    <div data-aos="fade-down" data-aos-duration="1000" class="video-carousel">
        <button class="carousel-button left" onclick="moveCarousel(-1)">&#10094;</button>
        <div class="video-container">
            <video width="1000" height="1000" autoplay muted loop>
                <source src="video/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video width="1000" height="1000" autoplay muted loop>
                <source src="video/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video width="1000" height="1000" autoplay muted loop>
                <source src="video/video3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <button class="carousel-button right" onclick="moveCarousel(1)">&#10095;</button>
    </div>
    
    <h1 data-aos="fade-down" data-aos-duration="1000" class="judulbenefitkel5">Apa Benefit dari Beasiswa ROMAN?</h1>
    <div class="containerbenefitkel5">
        <div data-aos="fade-down" data-aos-duration="1000" class="benefitcardkel5">
            <h3>1. Biaya</h3><br>
            <p>Bebas biaya pendidikan
            dan mendapatkan uang saku bulanan</p>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500" class="benefitcardkel5">
            <h3>2. Fasilitas</h3><br>
            <p>Disediakan bimbingan khusus pembelajaran online.</p>
        </div>
        <div data-aos="fade-down" data-aos-duration="2000" class="benefitcardkel5">
            <h3>3. Pengalaman</h3><br>
            <p>Mendapatkan kesempatan
            magang dan penawaran kerja</p>
        </div>
    </div>
</div>



    <div id="content">
        

    </div>
    

    <script>
        $(document).ready(function() {
    $('.nav-link').click(function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        $('#content').load(page + '.php', function() {
            if (page === 'Formulir-pendaftaran') {
                $('#judulkel5').hide();
                $('.bawahkel5').hide();
                $('.isian').hide();
            } else if (page === 'kontak') {
                $('#judulkel5').hide();
                $('.bawahkel5').hide();
                $('.isian').hide();
            } else if (page === 'menugaleri') {
                $('#judulkel5').hide();
                $('.bawahkel5').hide(); 
                $('.isian').hide();
            } else if (page === 'seleksi_berkas') {
                $('#judulkel5').hide();
                $('.bawahkel5').hide(); 
                $('.isian').hide();
            } else if (page === 'hasil_seleksi578') {
                $('#judulkel5').hide();
                $('.bawahkel5').hide(); 
                $('.isian').hide();
            } else if (page === 'persyaratan') {
                $('#judulkel5').hide();
                $('.bawahkel5').hide();
                $('.isian').hide();
            } else {
                $('#judulkel5').show();
                $('.bawahkel5').show();
                $('.isian').hide();
            } 
        });
    });
});



        
    </script>

<script src="aos-master/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<div class="bawahkel5">
        <div class="isi-bawah" id="kontakkel5">
            <h2 data-aos="fade-right" data-aos-duration="1000">Hubungi kami</h2><br>
            <p data-aos="fade-right"  data-aos-duration="1500">+62 857-7771-1570</p>
            <p data-aos="fade-right" data-aos-duration="2000">beasiswaroman@gmail.com</p>
        </div>
    </div>
</body>
</html>
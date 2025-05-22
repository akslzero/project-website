<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylekelompok5.css">
    <title>Galeri</title>
    <style>
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s forwards;
        }

        .gallery-item:nth-child(1) {
            animation-delay: 0.05s;
        }
        .gallery-item:nth-child(2) {
            animation-delay: 0.10s;
        }
        .gallery-item:nth-child(3) {
            animation-delay: 0.20s;
        }
        .gallery-item:nth-child(4) {
            animation-delay: 0.30s;
        }
        .gallery-item:nth-child(5) {
            animation-delay: 0.40s;
        }
        .gallery-item:nth-child(6) {
            animation-delay: 0.50s;
        }
        .gallery-item:nth-child(7) {
            animation-delay: 0.60s;
        }
        .gallery-item:nth-child(8) {
            animation-delay: 0.70s;
        }
        .gallery-item:nth-child(9) {
            animation-delay: 0.80s;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        h2 {
            text-align: center;
            margin-top: 3%;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <h2>FOTO KEGIATAN BEASISWA ROMAN</h2>
    <div class="gallery-container">
        <div class="gallery-item"><img src="img/img1.jpg" alt="Image 1"></div>
        <div class="gallery-item"><img src="img/img2.jpg" alt="Image 2"></div>
        <div class="gallery-item"><img src="img/img3.jpg" alt="Image 3"></div>
        <div class="gallery-item"><img src="img/img4.jpg" alt="Image 4"></div>
        <div class="gallery-item"><img src="img/img5.jpg" alt="Image 5"></div>
        <div class="gallery-item"><img src="img/img6.jpg" alt="Image 6"></div>
        <div class="gallery-item"><img src="img/img7.jpg" alt="Image 7"></div>
        <div class="gallery-item"><img src="img/img8.jpg" alt="Image 8"></div>
        <div class="gallery-item"><img src="img/img9.jpg" alt="Image 9"></div>
    </div>
</body>
</html>
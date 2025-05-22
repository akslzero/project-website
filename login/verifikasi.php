<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Kode</title>
    <link rel="stylesheet" href="verifikasi.css">
    <style>
        .notification {
            display: none;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid green;
            background-color: #e8f5e9;
            color: green;
            border-radius: 5px;
            text-align: center;
        }
        .disabled-link {
            pointer-events: none;
            color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Verifikasi Kode</h2>
        <p>Silakan masukkan kode verifikasi yang telah Anda terima.</p>
        
        <div id="notification" class="notification"></div>
        
        <form id="verificationForm" onsubmit="return showNotification(event)">
            <label for="code">Kode Verifikasi:</label>
            <input type="text" id="code" name="code" required>
            
            <button type="submit">Verifikasi</button>
        </form>
        <br>
        <p>Belum menerima kode? <a href="#" id="resendLink" onclick="resendCode()">Kirim ulang</a></p>
    </div>

    <script>
    let resendTimeout;

    function showNotification(event) {
        event.preventDefault();
        
        const code = document.getElementById('code').value;

        if (code) {
            document.getElementById('notification').innerText = "Verifikasi berhasil! Anda sekarang dapat masuk.";
            document.getElementById('notification').style.display = 'block';

            setTimeout(() => {
                window.location.href = "login.php";
                alert("Verifikasi Berhasil! Silahkan login. Klik OK!");
            }, 2000);
        }
    }

    function resendCode() {
        const notification = document.getElementById('notification');
        const resendLink = document.getElementById('resendLink');

        
        alert("Kode sudah dikirim. Silahkan tunggu 1 menit untuk mengirim ulang lagi.");

       
        notification.innerText = "Kode sudah dikirim ke email.";
        notification.style.display = 'block';

        
        resendLink.classList.add("disabled-link");
        resendLink.onclick = null;

        setTimeout(() => {
            notification.style.display = 'none';
        }, 10000);
        
        
        resendTimeout = setTimeout(() => {
            resendLink.classList.remove("disabled-link");
            resendLink.onclick = resendCode;
        }, 60000);
    }
</script>

</body>
</html>

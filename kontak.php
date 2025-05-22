<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylekontak.css">
    <title>Kontak</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
        .highlight {
            background-color: gray;
            border: 1px solid black;
            padding: 10px;
            color: white;
        }
    </style>
<body>
    <p>Jika ada masalah, bisa kontak kami dengan mengisi formulir dibawah ini</p>
    <div class="contact-form">
        <h2>Kontak</h2>
        <form id="kontakForm">
            <input type="text" id="name" name="name" placeholder="Nama" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <textarea id="message" name="message" placeholder="Pesan" rows="5" required></textarea>
            <input type="button" id="submitForm" value="Kirim">
            <input type="button" id="clearForm" value="Hapus">
            <input type="button" id="TambahStyle" value="Tambah Style">
        </form>
    </div>

    <div id="output"></div>
   

    <script>
        $(document).ready(function () {
            
            $("#submitForm").click(function () {
                
                var name = $("#name").val();
                var email = $("#email").val();
                var message = $("#message").val();
                $.post("proses_kontak.php", {
                    name: name,
                    email: email,
                    message: message
                }, function (response) {
                    $("#output").html(response);
                });
            });
            $("#clearForm").click(function () {
                $("#kontakForm")[0].reset();
                $("#output").empty().removeClass("highlight");
            });
            $("#TambahStyle").click(function () { 
                $("#output").addClass("highlight");
            });
        });
    </script>
</body>
</html>
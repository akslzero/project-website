<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        echo "<h3>Data yang Dikirim:</h3>";
        echo "<ul>";
        echo "Nama: $name<br>";
        echo "Email: $email<br>";
        echo "Pesan: $message<br>";
        echo "</ul>";
    } else {
        echo "Data tidak lengkap.";
    }
}
?>

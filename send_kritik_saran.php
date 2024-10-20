<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['kritik-saran-nama'];
    $email = $_POST['kritik-saran-email'];
    $pesan = $_POST['kritik-saran-pesan'];

    // Email tujuan (email admin)
    $to = "naufal.lutfi.toi22@polban.ac.id"; // Ganti dengan email admin
    
    // Subjek email
    $subject = "Kritik dan Saran dari $nama";
    
    // Isi email
    $message = "
    <html>
    <head>
    <title>Kritik dan Saran</title>
    </head>
    <body>
    <p><strong>Nama:</strong> $nama</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Pesan:</strong></p>
    <p>$pesan</p>
    </body>
    </html>
    ";
    
    // Header untuk email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n"; // Pengirim

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>

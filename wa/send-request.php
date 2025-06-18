<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = urlencode($_POST['nama']);
    $lagu = urlencode($_POST['lagu']);
    $pesan = urlencode($_POST['pesan']);

    $no_wa = '6282114544542'; // Nomor WhatsApp Radio
    $text = "Halo Admin Radio, saya $nama ingin request lagu:\n\nJudul: $lagu\nPesan: $pesan";
    $url = "https://wa.me/$no_wa?text=$text";

    header("Location: $url");
    exit();
} else {
    echo "Akses tidak valid.";
}

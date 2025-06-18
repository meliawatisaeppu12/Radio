<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Request Lagu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: sans-serif; padding: 2rem; background: #f4f4f4; }
        .form-box { background: white; padding: 2rem; border-radius: 8px; max-width: 500px; margin: auto; }
        label { display: block; margin-top: 1rem; }
        input, textarea { width: 100%; padding: 0.5rem; margin-top: 0.5rem; border-radius: 4px; border: 1px solid #ccc; }
        button { margin-top: 1.5rem; padding: 0.75rem 1.5rem; background: #25D366; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Request Lagu</h2>
    <p>Silakan isi formulir berikut untuk mengirim request lagu ke Radio Sasaraina FM.</p>

    <form method="post">
        <label for="name">Nama Anda</label>
        <input type="text" id="name" name="name" required>

        <label for="lagu">Judul Lagu</label>
        <input type="text" id="lagu" name="lagu" required>

        <label for="pesan">Pesan Tambahan (opsional)</label>
        <textarea id="pesan" name="pesan" rows="4"></textarea>

        <button type="submit" name="submit">Kirim</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['name']);
    $lagu = htmlspecialchars($_POST['lagu']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $nomor = "6282114544542"; // Ganti dengan nomor WA tujuan
    $teks = "Halo, saya *$nama* ingin request lagu:\n\n🎵 *$lagu*";

    if (!empty($pesan)) {
        $teks .= "\n\n$pesan";
    }

    $url = "https://wa.me/$nomor?text=" . urlencode($teks);

    // Redirect ke WhatsApp
    echo "<script>window.open('$url', '_blank');</script>";
    // Notifikasi ke admin bisa dikembangkan via email atau API
  //  echo "<script>alert('Request lagu Anda berhasil dikirim. Terima kasih!');</script>";
}
?>

</body>
</html>

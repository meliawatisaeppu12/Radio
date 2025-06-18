<script>
    const heroSection = document.querySelector(".hero");

    // Gambar-gambar background
    const backgrounds = [
        "img/foto1.jpeg",
        "img/foto2.jpeg",
        "img/foto3.jpeg",
        "img/foto4.jpeg",
        "img/foto5.jpeg",
        "img/foto6.jpeg",

    ];

    let current = 0;

    function changeBackground() {
        heroSection.style.backgroundImage = `url('${backgrounds[current]}')`;
        current = (current + 1) % backgrounds.length;
    }

    // Pertama kali load
    changeBackground();
    // Ganti setiap 8 detik
    setInterval(changeBackground, 8000);
</script>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; <?= date("Y") ?> Radio Sasaraina FM | Mentawai, Indonesia</p>
        <p>
            Kontak: <a href="mailto:info@sasarainafm.id" class="text-warning">info@sasarainafm.id</a> |
            <a href="https://instagram.com/sasarainafm" target="_blank" class="text-warning">Instagram</a>
        </p>
    </div>
</footer>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
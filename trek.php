<!-- Bootstrap JS dan Visualizer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const canvas = document.getElementById("vis-canvas");
    const ctx = canvas.getContext("2d");

    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        let barCount = 50;
        let width = canvas.width / barCount;
        for (let i = 0; i < barCount; i++) {
            let height = Math.random() * canvas.height;
            ctx.fillStyle = `hsl(${i * 10}, 100%, 50%)`;
            ctx.fillRect(i * width, canvas.height - height, width - 2, height);
        }
        requestAnimationFrame(draw);
    }
    draw();
</script>
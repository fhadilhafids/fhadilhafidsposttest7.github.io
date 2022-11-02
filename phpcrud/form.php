<?php
    session_start();
    if (empty($_SESSION['akses'])){
        echo "
        <script>
            alert('Mohon Login terlebih dahulu..');
            window.location.href='index.php';
        </script>
        ";
    };
?>
<div class="form">
    <form action="hasil.php" method="get">
        <label for="chk" aria-hidden="true" align="center">FORM BERITA TERBARU</label><br><br><br>
        <input type="email" name="email" placeholder="Email" required=""><br>
        <input type="name" name="nama" placeholder="nama" required=""><br>
        <input type="text" name="kota" placeholder="kota" required=""><br>
        <input type="text" name="massage" placeholder="massage" required=""><br>
        <button>Kirim</button>
    </form>
</div>


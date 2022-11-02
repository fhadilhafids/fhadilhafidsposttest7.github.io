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
<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $notelp, $tanggal]);

    $msg = 'Created Successfully!';
}

?>


<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" id="id">
        <input type="text" name="nama" id="nama">
        <label for="email">Email</label>
        <label for="notelp">No. Telp</label>
        <input type="text" name="email" id="email">
        <input type="text" name="notelp" id="notelp">
        <label for="notelp">Upload Gambar</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): header('Location: crud.php');?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>


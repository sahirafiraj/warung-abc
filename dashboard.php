<?php

include 'includes/cek_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Warung ABC</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['nama_lengkap']; ?></h1>
    <p>Anda Login sebagai: <?php echo $_SESSION['role']; ?></p>

    <ul>
        <?php if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'gudang') { ?>
    <?php } ?>

    <?php if($_SESSION['role']== 'admin' || $_SESSION['role']== 'kasir') { ?>
        <li><a href="transaksi.php">Transaksi Kasir</a></li>
        <li><a href="riwayat_transaksi.php">Riwayat Transaksi</a></li>
    <?php } ?>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>
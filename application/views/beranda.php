<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/style.css">
</head>
<body style="background: linear-gradient(135deg, #ff00cc 0%, #333399 100%);">
<header class="ob">
    <div class="atas">
    <div id="logo"><img style="Width: 127px;margin-left: 40px;float: left;"
    src"<?=base_url()?>assets/tikusterkutuk.png"></div>
    <nav>
    <ul>
    <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
    <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
    <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
    <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
    <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
    </ul>
    </nav>
    </div>
</header>
<h1 align="center" style="color:white;text-align:left;font-size:10.3mm;
margin-top:97px;margin-left:12px;font-family:sans-serif;">Selamat Datang <?=$nama_lengkap?>
<br> Berperilakulah seperti <?=$jenis_kelamin?></h1>

<p style="font-size:18px;margin-left:56px;margin-top:39px;">Pagi matahari terbit,
    Malam matahari terbenam. 
</p>
<img style="width:50px;margin-left:1210px;margin-top:219px;" src="<?=base_url()?>assets/gentle.png" alt="">    
</body>
</html>
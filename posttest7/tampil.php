<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styleOrder.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="bravo-logo.png">
    <title>RIPCORD | Perlengkapan Komputer & Accesories</title>
</head>

<body>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.php">Ripcord</a></h1>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a id="me" onclick="popup()" href="#">PRODUCT</a></li>
                <li><a href="AboutMe.php">ABOUT ME</a></li>
                <li class="active"><a href="order.php">ORDER</a></li>
                <?php if(!isset($_SESSION["login"])){
                        echo('<li><a href="login.php" class="tbl-pink" id="sign">SIGN IN</a></li>');
                    }else {
                        echo('<li><a href="logout.php" class="tbl-pink" id="logout">SIGN OUT</a></li>');
                } ?>
                <img src="moon1.webp" id="icon">
            </ul>
        </div>
    </header>

    <section class="banner">
        <div class="tampil">
            <div class="judul"> YOUR ORDER </div>
            <div class="contain-tampil">
                <?php 
                    $nama = $_POST["nama"];
                    echo "Nama Pelanggan : ".$nama;
                ?>
            </div>
            <div class="contain-tampil">
                <?php 
                    $nomor = $_POST["nomor"];
                    echo "Nomor Pelanggan : ".$nomor;
                ?>
            </div>
            <div class="contain-tampil">
                <?php 
                    $barang = $_POST["barang"];
                    echo "Nama Barang : ".$barang;
                ?>
            </div>
            <div class="contain-tampil">
                <?php 
                    $jumlah = $_POST["jumlah"];
                    echo "Jumlah Barang : ".$jumlah;
                ?>
            </div>
            <div class="contain-tampil">
                <?php 
                    $metode = $_POST["metode"];
                    echo "Metode Pembayaran : ".$metode;
                ?>
            </div>
            <div class="end"> <br> THANK YOU FOR YOUR ORDER</div>
        </div>
    </section>

    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - RIPCORD || Perdagangan Eceran Komputer & Perlengkapan</small>
        </div>
    </footer>

<script>

    var icon = document.getElementById("icon");

    icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.src = "sun.png";
        }else{
            icon.src = "moon1.webp";
        }
    }

    var judul = document.getElementById("title");
    judul.addEventListener('click', function showInfo(){
        const x = document.getElementById('isi');
        if (x.style.display == 'none'){
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    })

    function popup() {
        var me = document.getElementById("me");
        alert("Belum ada barangnya")
    }

</script>

</body>

</html>

<!-- Nama(text), NamaBarang(text), jumlahbarang(number) ,nomor(tel), cashTransfer(radio), -->
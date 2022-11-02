<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
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
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a id="me" onclick="popup()" href="#">PRODUCT</a></li>
                <li><a href="AboutMe.php">ABOUT ME</a></li>
                <li><a href="order.php">ORDER</a></li>
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
        <h2 id="title">PERLENGKAPAN COMPUTER & ACCESORIES</h2>
        <h2 id="isi" style="display: none;">Pencarian</h2>
    </section>

    <div class="list-barang container">
        <a href="#">
            <div class="barang">
                <div class="barang-image pic-1">
                </div>
                <div class="barang-text">
                    <div class="judul">
                        <span> <i class='bx bx-play'></i></span>
                        <h1>Laptop Acer aspire 5</h1>
                    </div>
                    <div class="harga">
                        <p>Rp. 8.150.000</p>
                    </div>
                </div>
            </div>
            <div class="barang">
                <div class="barang-image pic-2">
                </div>
                <div class="barang-text">
                    <div class="judul">
                        <span> <i class='bx bx-play'></i></span>
                        <h1>Laptop asus A509 A</h1>
                    </div>
                    <div class="harga">
                        <p>Rp. 6.800.000</p>
                    </div>
                </div>
            </div>
            <div class="barang">
                <div class="barang-image pic-3">
                </div>
                <div class="barang-text">
                    <div class="judul">
                        <span> <i class='bx bx-play'></i></span>
                        <h1>FAN Processor alseye AM 90 cooler 2 pipe</h1>
                    </div>
                    <div class="harga">
                        <p>Rp. 215.000</p>
                    </div>
                </div>
            </div>
    </div>

    <section class="about">
        <div class="container">
            <h3>ABOUT ME</h3>
            <center><p>Saya <strong>Muhammad Arif</strong> dengan NIM <strong>2109106106</strong>, seorang mahasiswa informatika angkatan 2021, memasuki semester 3 dan sedang mengerjakan sebuah tugas pembuatan Website dengan PHP-CSS, hobi saya menonton film baik itu film luar, drama korea, dan juga anime.</p></center>
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
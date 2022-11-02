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
        <div class="form">
            <div class="contain">
                <div class="head"> ORDER HERE </div>
                <form action="tampil.php" method="post">
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Nama Pemesan </span>
                            <input type="text" name="nama" placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Nomor Telepon </span>
                            <input type="tel" name="nomor" placeholder="Enter Your Number">
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Nama Barang </span>
                            <input type="text" name="barang" placeholder="Enter Your Item">
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Jumlah Barang </span>
                            <input type="number" name="jumlah" placeholder="Enter Your Quantity">
                        </div>
                    </div>
                    <div class="radio-btn">
                        <span class="radio-title"> Metode Pembayaran </span>
                        <div class="kategori">
                            <input type="radio" name="metode" value="Cash"> CASH
                            <input type="radio" name="metode" value="Transfer"> TRANSFER
                        </div>
                    </div>
                    <div class="submiting">
                        <input type="submit" value="Masukkan">
                    </div>
                </form>
            </div>
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
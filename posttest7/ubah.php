<?php
    session_start();
    require 'connect.php';

    if (isset($_POST['kirim'])){
        $id = $_GET['id'];
        $barang = $_POST["barang"];
        $category = $_POST["category"];
        $nomor = $_POST["nomor"];
        $jumlah = $_POST["jumlah"];
        $harga = $_POST["harga"];
        $gambar = $_POST["file"];
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $waktu = date("Y-m-d H-i-s");
        $result = mysqli_query($conn, "UPDATE komputer SET namaproduk='$barang', category='$category', kodebarang='$nomor', stock='$jumlah', harga='$harga', gambar='$gambar', waktu='$waktu' WHERE id='$id'");

        if($result){
            echo "
                <script>
                    alert('Pesanan Anda Telah Berhasil Berubah!!!');
                    document.location.href = 'tampiladmin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah!!!');
                    document.location.href = 'orderHere.php';
                </script>
            ";
        }
    }
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
            <h1><a href="admin.php">Ripcord</a></h1>
            <ul>
                <li><a href="admin.php">HOME</a></li>
                <li><a id="me" onclick="popup()" href="#">PRODUCT</a></li>
                <li class="active"><a href="tambah.php">DATA</a></li>
                <?php if(!isset($_SESSION["username"])){
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
                <div class="head"> PRODUCT INFORMATION </div>
                <form method="post">
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Product Name </span>
                            <input type="text" name="barang" placeholder="Enter Product Item">
                        </div>
                    </div>
                    <div class="detail-row">
                        <label for="category"> Choose Category </label>
                        <select style ="width:93%" id="category" name="category">
                            <option value="laptop">Laptop</option>
                            <option value="monitor">Monitor</option>
                            <option value="motherboard">Motherboard</option>
                            <option value="cpu">CPU</option>
                            <option value="ram">Ram</option>
                            <option value="hardisk">Hardisk</option>
                        </select>
                    </div>
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Item Code </span>
                            <input type="tel" name="nomor" placeholder="Enter Number Code">
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Opening Stock </span>
                            <input type="number" name="jumlah" placeholder="Enter Opening Stock">
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-box">
                            <span class="detail"> Selling Price </span>
                            <input type="number" name="harga" placeholder="Enter Selling Price">
                        </div>
                    </div>
                    <div class="detail-box">
                        <span class="detail"> Image </span>
                        <input type="file" name="file">
                    </div>
                    <div class="submiting">
                        <input type="submit" name="kirim" value="Save Product">
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
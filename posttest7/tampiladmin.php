<?php
    session_start(); 
    require 'connect.php';
    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $result = mysqli_query($conn, "SELECT * FROM komputer where namaproduk LIKE '%$keyword%' or category LIKE '%$keyword%'");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM  komputer");
    }
    $pesanan = [];

    while($row = mysqli_fetch_assoc($result)){
        $pesanan[] = $row;
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
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="bravo-logo.png">
        <title>RIPCORD | Perlengkapan Komputer & Accesories</title>
    </head>

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
                <li class="active"><a href="tambah.php">TAMBAH</a></li>
                <?php if(!isset($_SESSION["login"])){
                        echo('<li><a href="login.php" class="tbl-pink" id="sign">SIGN IN</a></li>');
                    }else {
                        echo('<li><a href="logout.php" class="tbl-pink" id="logout">SIGN OUT</a></li>');
                } ?>
                <img src="moon1.webp" id="icon">
            </ul>
        </div>
    </header>

    <div class="bg-tampil">
        <h1 class="daftar-pesanan"> DAFTAR BARANG YANG TERSEDIA </h1>
        <form action = "" method = "GET">
            <div class="search-box">
                <input class = "search-txt" type="text" name ="keyword" placeholder="Cari BARANG . . .">
                <button type ="submit" class="search-btn" name ="search"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <div class="table-section">
            <table>
                <thead>
                    <tr>
                        <th> Nomor </th>
                        <th> Nama Barang</th>
                        <th> Kategori </th>
                        <th> Kode Barang </th>
                        <th> Jumlah Barang </th>
                        <th> Harga Barang </th>
                        <th> File </th>
                        <th> Waktu </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($pesanan as $pesan): ?>
                    <tr>
                        <td> <?php echo $i ;?></td>
                        <td> <?php echo $pesan['namaproduk'] ;?></td>
                        <td> <?php echo $pesan['category'] ;?></td>
                        <td> <?php echo $pesan['kodebarang'] ;?></td>
                        <td> <?php echo $pesan['stock'] ;?></td>
                        <td> <?php echo $pesan['harga'] ;?></td>
                        <td> <?php echo $pesan['gambar'] ;?></td>
                        <td> <?php echo $pesan['waktu'] ;?></td>
                        <td>
                            <button> <a href="hapus.php?id=<?php echo $pesan["id"]; ?>" onclick="return confirm('Yakin ingin Menghapus data ini?')" role='button'><i class="fa fa-trash"></i> </a> </button>
                            <button> <a href="ubah.php?id=<?php echo $pesan["id"]; ?>"> <i class="fa fa-file-text"></i> </a></button>
                        </td>
                    </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    </body>

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

</html>
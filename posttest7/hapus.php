<?php 
    require 'connect.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM komputer WHERE id = $id");

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'tampiladmin.php';
            </script>
        ";
    }else{  
        echo"
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'tampiladmin.php';
            </script>
        ";
    }
?>
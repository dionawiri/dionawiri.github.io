<?php 
session_start();

if ( !isset($_SESSION["login_pmr"])) {
    header("location: login_admin.php");
    exit;
}

require 'functions.php';


if( hapus () > 0 ) {

    echo"
        <script>
        alert('Data berhasil dihapus');
        document.location.href = 'admin.php';
        </script>
    ";
    }

    else { 
        echo"
            <script>
            alert('Data gagal dihapus');
            document.location.href = 'admin.php';
            </script>
        ";
        
    }
?>
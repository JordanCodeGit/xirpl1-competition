<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        echo "Anda harus masuk sebagai panitia dahulu!";
        exit();
    }

    include './koneksi.php';

    $id = $_POST['id'];
    $first = $_POST ['first'];
    $last = $_POST ['last'];
    $nisn = $_POST['nisn'];
    $sekolah = $_POST['sekolah'];
    $email = $_POST ['email'];
    $pilihan = $_POST ['pilihan'];

    $sql = sprintf("UPDATE formulir SET first_name='%s', last_name='%s', asal_sekolah='%s', nisn='%s', email='%s', lomba='%s' WHERE id='%s'",
            $first,
            $last,
            $sekolah,
            $nisn,
            $email,
            $pilihan,
            $id
    );
    if($conn->query($sql) === TRUE){
        header("Location: tampil.php?sukses");
    } else {
        echo "Kesalahan: " . $conn->error;
        echo "<br><code>$sql</code>";
    }
?>
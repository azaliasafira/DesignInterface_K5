<?php
    include("koneksi.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO tb_user (username, email, password) VALUE ('$username', '$email', '$password')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: ./login/index.php?status=sukses');
        } else {
            header('Location: ./login/index.php?status=gagal');
        }
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO tb_user (username, email, password) VALUE ('$username', '$email', '$password')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: ./login/index.php?status=sukses');
        } else {
            header('Location: ./login/index.php?status=gagal');
        }
    }
?>
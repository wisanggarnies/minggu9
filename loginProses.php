<?php
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if($user=="admin" && $pass=="1234"){
        session_start();
        $_SESSION["username"] = $user;
        header("Location:homesession.php");
    }
    else{
        echo "Username atau password tidak sesuai <br>";
        echo '<a href="LoginForm.html">Kembali ke Halaman Login</a>';
    }
?>
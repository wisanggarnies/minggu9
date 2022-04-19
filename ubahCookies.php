<?php
    $name = "mahasiswa";
    $value = "Wisang Garnies";

    setcookie($name, $value, time()+600);

    setcookie("kelas", "MI-1E", time()+3600);
?>
<html>
    <body>
        <?php
            echo "Cookies telah diubah";
        ?>
    </body>
</html>
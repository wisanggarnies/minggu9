<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makananfav"] = "Sate Padanng";

            echo "Session makananfav telah diubah";
        ?>
    </body>
</html>
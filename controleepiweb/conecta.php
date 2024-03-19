<?php
    $conn = mysqli_connect("sql.freedb.tech","freedb_MuriloPietro","8*FcGMa*bxUb2Nj","freedb_ControleEPI");
    mysqli_set_charset($conn, "utf8");
    if (!$conn)
    {
        echo "Erro: ".mysqli_connect_error().PHP_EOL;
    }
?>
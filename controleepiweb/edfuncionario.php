<?php
    include 'conecta.php';
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $id = $_GET['id'];
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $epi = $_POST['epi'];    
    $dias = $_POST['validade'];
    $validade = new DateInterval("P{$dias}D");
    $data_entrega = new DateTime();
    $data_vencimento = clone $data_entrega;
    $data_vencimento ->add($validade);
    $data_entrega_formatada = $data_entrega->format("Y-m-d");
    $data_validade_formatada = $data_vencimento->format("Y-m-d");
    
    $sql = "UPDATE funcionario SET matricula='$matricula',nome='$nome',epi='$epi',data_entrega='$data_entrega_formatada',data_vencimento='$data_validade_formatada' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script language= 'javascript' type='text/javascript'>
                window.location.href='index.php';
                </script>";
    }
    mysqli_close($conn);
?>
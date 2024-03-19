<?php
    include 'conecta.php';
    $timezone = new DateTimeZone('America/Sao_Paulo');   
    $nome = $_POST['nome'];
    $epi = $_POST['epi'];
    $dias = $_POST['validade'];
    $validade = new DateInterval("P{$dias}D");
    $data_entrega = new DateTime();
    $data_vencimento = clone $data_entrega;
    $data_vencimento ->add($validade);
    $data_entrega_formatada = $data_entrega->format("Y-m-d");
    $data_validade_formatada = $data_vencimento->format("Y-m-d");

    $query = $conn->query("SELECT * FROM funcionario WHERE nome='$nome' AND epi='$epi'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
              alert('Funcionário já existe em nossa base de dados!');
              window.location.href='index.php';
              </script>";
        exit();
    }
    else
    {
        $sql = "INSERT INTO funcionario(nome,epi,data_entrega,data_vencimento) VALUES ('$nome','$epi','$data_entrega_formatada','$data_validade_formatada')";
        if (mysqli_query($conn, $sql))
        {
            echo "<script language='javascript' type='text/javascript'>
              window.location.href='index.php';
              </script>"; 
        }
    }
    mysqli_close($conn);
?>
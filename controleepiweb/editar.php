<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Controle de EPI's</title>
        <link rel="icon" type="image/x-icon" href="icone.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: #B0C4DE;
            }
        </style>
    </head>
    <body>
        <center><h1><b>Controle de EPI's</b></h1></center>
        <hr/>
        <br/>
        <br/>
        <main>
            <div class="container">
                <div class="row row-cols-2 row-cols-md-4 mb-4 text-center">
                    <div class="col-md-12">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                            </svg>&nbsp;&nbsp;<b>EDIÇÃO DA ENTREGA</b></h4>
                            </div>
                            <div class="card-body text-start">
                                <?php
                                    include 'conecta.php';
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM funcionario WHERE id=$id";
                                    $query = $conn->query($sql);
                                    while ($dados = $query->fetch_array()){
                                        $matricula = $dados['matricula'];
                                        $nome = $dados['nome'];
                                        $epi = $dados['epi'];
                                        $data_entrega = $dados['data_entrega'];
                                        $data_vencimento = $dados['data_vencimento'];
                                    }
                                ?>                                
                                <div class="modal-body">

                                    <form action="edfuncionario.php?id=<?php echo $id ?>" method="post">
                                        <label>MATRICULA</label>
                                        <input type="text" class="form-control" name="matricula" value="<?php echo $matricula; ?>" required/>
                                        <label>NOME</label>
                                        <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required/>
                                        <label>EPI</label>
                                        <input type="text" class="form-control" name="epi" value="<?php echo $epi; ?>" required/>
                                        <label>VALIDADE</label>
                                        <input type="number" class="form-control" name="validade" required>
                                        <label>ANTIGA DATA DE ENTREGA: <b><?php echo $data_entrega?></b></label>
                                        </br>
                                        <label>ANTIGA DATA DE VENCIMENTO: <b><?php echo $data_vencimento?></b></label>                          
                                        </br>
                                        <button type="submit" class="btn btn-outline-success"><b>ATUALIZAR</b></button>
                                        <a class="btn btn-outline-danger" href="index.php" role="button">Voltar</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
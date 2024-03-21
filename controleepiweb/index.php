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
        <center>
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Entrega</button>
            <a class="btn btn-outline-dark" href="listarEpiVencidas.php" role="button">Listar EPI's vencidas</a>
            <a class="btn btn-outline-secondary" href="listarEpiAvencer.php" role="button">Listar EPI's a vencer</a>
        </center>
        <br/>
        <main>
            <div class="container">
                <div class="row row-cols-2 row-cols-md-4 md-4 text-center">
                    <div class="col-md-12">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                                </svg>&nbsp;&nbsp;<b>ENTREGAS</b></h4>
                            </div>
                            <div class="card-body">
                                <?php
                                include 'funcionarios.php';
                                ?>                                
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </main>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"> <!--aqui deixa o Modal no centro-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro da entrega</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="cadfuncionario.php" method="post">
                            <label>MATRICULA</label>
                            <input type="number" class="form-control" name="matricula" placeholder="Digite a matrícula do Funcionário" required/>
                            <label>NOME</label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do Funcionário" required/>
                            <label>EPI</label>
                            <input type="text" class="form-control" name="epi" placeholder="Digite qual a EPI" required/>
                            <label>VALIDADE(DIAS)</label>
                            <input type="number" class="form-control" name="validade" placeholder="Digite a validade da EPI" required/>
                            <br/>
                            <button type="submit" class="btn btn-outline-success"><b>CADASTRAR</b></button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
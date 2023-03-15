<!DOCTYPE html>
<html lang="en">

<?php

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim') {
    $var1 = true;
    header('Location:../index.php?msg=Nao_autenticado');}

if ($_SESSION['cancelamento_item'] != true) {
    $var1 = true;
    header('Location:home.php?msg=Sem_permissao');}


?>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../img/ville_lg.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelamento Item</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/dados.js"></script>
</head>
<style>
    body {
        background: lightgrey;
    }
    .meio{
        position: sticky;
        top:0;
        bottom: 275px;
        left: 0;
        right: 0;
        margin-left: auto;
        width: 300px;
        opacity: 0.5;
    }

</style>

<body onload="pesquisar()">
    <div class="container-fluid">
        <div style='height:90px;' class="row sticky-top">
            <nav class="mb-4 w-100 navbar navbar-expand-md navbar-dark bg-dark">

                <div style='font-size:12px' class="navbar-collapse" id="navegacao2">
                    <div class="container-fluid">
                        <div class="row">
                            <div id='filtro_loja1' class="m-2" style='height:43px; width:15%; z-index: 1;'></div>
                            <input type="number" style='height:43px' placeholder="PDV" id="Cod_pdv"
                                name='Cod_pdv' class="m-2 col form-control">
                            </input>
                         
                            <input type="date"  placeholder="Data da Venda" id="Data_inicio"
                                name='Data_Mov' class="m-2 col form-control">
                            </input>
                            <span class='text-light mt-3' >ATÉ</span>
                            <input type="date"  placeholder="Data da Venda" id="Data_fim"
                                name='Data_Mov' class="m-2 col form-control">
                            </input>
                          
                            <div id='ocultar' class="m-2 col" style='height:43px;  z-index: 1;'></div>
                            <div onclick="get_dados_html() , pesquisar() " class="mt-2 col ">
                            <button  class="btn w-100 p-2 btn-success">Pesquisar</button>
                            </div>
                            <div onclick="Excel()" class="mt-2 col ">
                                <button  class="btn w-100 p-2 btn-primary">Gerar Excel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
                <div class="col-12" id="dados">
                <div style="height: 700px;"></div>
            </div>
        </div>
    </div>
    </div>
</body>

<script src="../js/cancelamento_item.js"></script>


</html>
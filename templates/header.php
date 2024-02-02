<?php 
    include_once('config/connection.php');
    include_once('config/url.php');
    include_once('config/processamento.php');


    if(isset($_SESSION['msg'])){
        $msgPring = $_SESSION['msg'];
        $_SESSION['msg'] = '';

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda contatos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <!-- Font awesome cdnjs -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

     <style>
        body{
            background-color: whitesmoke;
        }

        .logo{
            width: 90px;
        }

        #main_title{
            text-align: center;
        }

        #contatos_tabela{
            max-width: 800px;
            margin: 0 auto;
        }

        #contatos_tabela thead{
            color: white;
            background-color: #007bff;
        }

        .lista_vazia{
            text-align: center;
        }

        #mensagem{
            color: #5D7D63;
            font-weight: bold;
            background-color: #D5EDDA;
            border: 1px solid #c3e6cb;
            padding: 10px;
            text-align: center;
            max-width: 500px;
            margin: 0 auto;
            margin-top: 30px;
        }

        .actions{
            text-align: right;
            width: 150px;
        }
        .actions i{
            padding: 2px;
        }

        .btn{
            border: none;
            color: red;
            padding: 0;
        }

        .view{
            color: #5D7D63;
        }

        .container{
            max-width: 800px;
        }

        .container_create{
            max-width: 500px;
            margin:  auto;
        }

        #btn{
            margin-top: 25px;
            color: white;
            padding: 6px;


        }


        .btnform{
            display: inline-block;
        }

        
     </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <img class="logo" src="https://cdn-icons-png.flaticon.com/512/1945/1945940.png" alt="">

        <div class="link_container">
            <div class="navbar-nav">
                 <a class="nav-link active" href="<?= $BASE_URL?>">Home</a>
                <a class="nav-link active" href="">Agenda</a>
                <a class="nav-link active" href="create.php">Adicionar contato</a>
            </div>
        </div>

        </nav>

    </header>


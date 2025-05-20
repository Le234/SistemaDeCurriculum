<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Enlatados Juarez</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */

        .w3-sidebar {
            width: 140px;
            
        }

        /*Define Fonte para todas as tags listadas abaixo*/

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>

</head>

<body style="background-color: #FAF5EB; ">

<?php

 if (!isset($_SESSION))
  {
    session_start();
}

require_once '../Model/Usuarios.php';
require_once '../Controller/FormacaoAcadController.php';
require_once '../Controller/ExperienciaProfissionalController.php';
require_once '../Controller/OutrasFormacoesController.php';

   
 ?>

<nav class="w3-sidebar w3-bar-block w3-center"style="background-color: #122833; overflow-y: auto;">
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-orange w3-text-light-grey" style="margin-top: 20px">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-orange w3-text-light-grey"style="margin-top: 20px">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-orange w3-text-light-grey"style="margin-top: 20px">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>
        <a href="#eProfissional" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-orange w3-text-light-grey"style="margin-top: 20px">
            <i class="fa fa-briefcase  w3-xxlarge"></i>
            <p>Experiências Profissionais</p>
        </a>
        <a href="#outrasFormacoes" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-orange w3-text-light-grey"style="margin-top: 20px">
            <i class="fa fa-line-chart w3-xxlarge"></i>
            <p>Outras Formações</p>
        </a>

</nav>



<div class="w3-padding-large" id="main" style=" margin-left: 60px;">
    <!--Incial -->
    <header class="w3-container w3-padding-32 w3-center w3-margin-bottom" id="home">
        <h1>
            <img src="../Img/logo_.png" alt="Logo" class="w3-image" width="30%">
            </br>
        </h1>
        
    </header>
    <!--Inicial -->
        
    <div class="w3-padding-128 w3-content w3-text-grey w3-center" id="dPessoais">
        <h2 class="w3-text-grey" style="color: rgb(18, 40, 51);">Dados Pessoais</h2>
        
     <form action='../Controller/Navegacao.php' method="post" class=" w3-row w3-margin" style=" width: 100%;">

        <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="<?php echo unserialize($_SESSION['Usuario'])->getID();?>">

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo unserialize($_SESSION['Usuario'])->getNome();?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;"><i class="w3-xxlarge fa fa-drivers-license"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF: 33333333333" value="<?php echo unserialize($_SESSION['Usuario'])->getCPF();?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email" value="<?php echo unserialize($_SESSION['Usuario'])->getEmail();?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;"><i class="w3-xxlarge fa fa-calendar"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="" value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento();?>">
                </div>
            </div>
            
            <div class="w3-row w3-section">
                <div class="w3-center" >
                    <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-cell w3-text-white w3-round-large" style=" background-color: #122833; width: 100%;">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
     <br>
         

    <div class="w3-padding-128 w3-content w3-text-grey w3-center" id="formacao" style=" margin-top: 40px;">
        <h2 class="w3-text-grey" style="color: rgb(18, 40, 51);">Formação</h2>
        
        <form action="../Controller/navegacao.php" method="post" class=" w3-row w3-margin" style=" width: 100%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" >
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest" >
                    
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge  fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
                    </div>
                </div>
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                </div>
            </div>
            
            <div class="w3-row w3-section">
                <div class="w3-center" >
                    <button name="btnAddFormacao" class="w3-button w3-block w3-cell w3-text-white w3-round-large" style="background-color: #122833; width: 20%;">
                                    <i class="w3-xxlarge fa fa-user-plus"></i>
                                    
                    </button> 
                </div>
            </div>
        </form>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
            <thead>   
                <tr class="w3-center w3-text-white" style=" background-color: #122833;">
                    
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                    </thead>
                
                <?php
                    $fCon = new FormacaoAcadController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)
                    
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                       
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '<td style="width: 5%;">
                        <form action="/Controller/Navegacao.php"  method="post">
                        <input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
                        <button name="btnExcluirFA" class="w3-button w3-block  w3-blue w3-cell w3-round-large">
                        <i class="fa fa-user-times"></i> </button></td>
                        </form>';
                        echo '</tr>';
                    }  
                ?>
                
             
            </table>

           
        </div>
    
    </div>
    
    <br> 
    <div class="w3-padding-128 w3-content w3-text-grey w3-center" id="eProfissional" style=" margin-top: 40px;">
        <h2 class="w3-text-grey" style="color: rgb(18, 40, 51);">Experiência Profissional</h2>
                <form action="../Controller/Navegacao.php" method="post" class=" w3-row  w3-margin" style=" width: 100%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest">
                    
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge  fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                    </div>
                </div>
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Centro Paula Souza">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
                </div>
            </div>
            
            <div class="w3-row w3-section">
                <div class="w3-center" >
                    <button name="btnAddEP" class="w3-button w3-block  w3-cell w3-text-white w3-round-large" style=" background-color: #122833; width: 20%;"><i class="w3-xxlarge fa fa-user-plus"></i></button> 
                </div>
            </div>
        </form>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
            <thead>   
                <tr class="w3-center w3-text-white" style=" background-color: #122833;">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                </thead>
                
                <?php
                    $ePro = new ExperienciaProfissionalController();
                    $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)
                    
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 10%;">'.$row->empresa.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '<td style="width: 5%;">
                        <form action="/Controller/Navegacao.php"  method="post">
                        <input type="hidden" name="idEP" value="'.$row->idexperienciaprofissional.'">
                        <button name="btnExcluirEP" class="w3-button w3-block  w3-blue w3-cell w3-round-large">
                        <i class="fa fa-user-times"></i> </button></td>
                        </form>';
                        echo '</tr>';
                    }  
                ?>
                
             
            </table>

           
        </div>
    
    </div>
    
     <br>

    <div class="w3-padding-128 w3-content w3-text-grey w3-center" id="outrasFormacoes" style=" margin-top: 40px;">
        <h2 class="w3-text-grey" style="color: rgb(18, 40, 51);">Outras Formações</h2>
        <form action="../Controller/navegacao.php" method="post" class=" w3-row  w3-margin" style=" width: 100%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest">
                    
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge  fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">
                    </div>
                </div>
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Ex: Curso de Inglês - Inglês City">
                </div>
            </div>
            
            <div class="w3-row w3-section">
                <div class="w3-center" >
                    <button name="btnAddOF" class="w3-button w3-block  w3-cell w3-text-white w3-round-large" style="  background-color: #122833; width: 20%;"><i class="w3-xxlarge fa fa-user-plus"></i></button> 
                </div>
            </div>
        </form>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
            <thead>   
                <tr class="w3-center w3-text-white" style=" background-color: #122833;">
                    
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                </thead>
                
                <?php
                    $fCon = new OutrasFormacoesController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)
                    
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                       
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '<td style="width: 5%;">
                        <form action="/Controller/Navegacao.php"  method="post">
                        <input type="hidden" name="id" value="'.$row->idoutrasformacoes.'">
                        <button name="btnExcluirOF" class="w3-button w3-block  w3-blue w3-cell w3-round-large">
                        <i class="fa fa-user-times"></i> </button></td>
                        </form>';
                        echo '</tr>';
                    }  
                ?>
                
             
            </table>

           
        </div>
    
    </div>

</div>                    
</body>
</html>


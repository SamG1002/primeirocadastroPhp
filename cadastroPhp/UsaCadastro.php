<?php
    include "index.php";
    require_once "model/Cadastro.php";
    //inicializar classe
    $cadastro = new Cadastro();

    //pegar os dados e jogar na variavel
    $name = $_POST["txtNome"];
    $rg = $_POST["txtRg"];
    $cpf = $_POST["txtCpf"];

    //setando os valores na clase 
    $cadastro->setNome($name);
    $cadastro->setRg($rg);
    $cadastro->setCpf($cpf);


    if($name != null && $rg != null && $cpf != null ){
        echo('
        <div class="wrapper">
        <div class="container">
        <div class="dados"> Dados </div>
        <div class="dados-form">
        
        <br>
        <label> Nome </label>
        <br>
        <input class="inputhm"value = "'. $cadastro->getNome() .'" readonly> </input><br/>
        <label> RG </label>
        <br>
        <input class="inputhm"value = "'. $cadastro->getRg() .'" readonly> </input><br/>
        <label> CPF </label>
        <br>
        <input class="inputhm"value = "'. $cadastro->getCpf() .'" readonly> </input><br/>
        </div>
        </div>
        </div> ');
    }else{
        echo("tem parada errada ai");
        header("location: index.php");
    }

    





?>
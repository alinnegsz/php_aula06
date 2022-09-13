<?php

//include_once("Disciplina.class.php");
require_once("Disciplina.class.php"); //importando a classe Disciplina de um arquivo externo

$nome = $_POST["nome"];
$carga= $_POST["carga"];
$ementa = $_POST["ementa"];

$objetoDisciplina = new Disciplina($nome, $carga, $ementa);
$objetoDisciplina->exibirDados();
$objetoDisciplina->inserirDisciplina();

// echo "O nome é: $nome";
// echo "<br />A carga é: $carga";
// echo "<br />A ementa é: $ementa";
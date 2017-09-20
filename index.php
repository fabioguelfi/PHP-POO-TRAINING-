<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>PHP POO TRAINING</title>
    <meta charset="utf-8">
</head>
<body>

<?php

// CLASSE CANETA
require_once 'Caneta.php';
// OBJETO CANETA 1
// INSTANCIANDO O OBJETO A PARTIR DA CLASSE CANETA USANDO O METODO DESTAMPAR
// PARA MODIFICAR O VALOR BOOLEANO DO ATRIBUTO TAMPADA
$c1 = new Caneta;
$c1->cor = 'azul';
$c1->ponta = 0.5;
$c1->tampada = true;

$c1->destampar();
print_r($c1);

echo '<hr>';

// OBJETO CANETA 2
// INSTANCIA Nº2 DE UMA MESMA CLASSE
// TOTAL LIBERDADE PARA INCREMENTAR VALORES NOS ATRIBUTOS E TRABALHAR CADA OBJETO COM SEUS COMPORTAMENTOS PERSONALIZADOS

$c2 = new Caneta;
$c2->cor = 'preta';
$c2->carga = 50;
$c2->tampar();
print_r($c2);

echo '<hr>';

// CLASSE CANECA
require_once 'Caneca.php';
// OBJETO CANECA 1
// INTANCIANDO A CANECA COM UM PERFIL UNICO

$caneca = new Caneca;
$caneca->cor = 'vermelha';
$caneca->corSecundaria = 'branca';
$caneca->tamanho = 'm';
$caneca->conteudoInterno = true;
$caneca->temperaturaQuente = true;
print_r($caneca);

// METODO VENDER(): RETORNA SE É POSSIVEL OU NÃO VENDER A CANECA BASEADO NOS VALORES QUE FORAM INTANCIADOS ATRAVES DA CLASSE CANECA PARA O OBJETO CANECA1
$caneca->vender($caneca);//RETURN FALSE NOT IS POSSIBLE TO SALE

//METODO USOPESSOAL(): RETORNA SE É POSSIVEL OU NÃO VENDER A CANECA, BASEANDO SE NOS VALORES QUE FORAM INTANCIADOS QUANDO O OBJETO CANECA1 FOI CRIADO ATRAVES DA CLASSE CANECA
$caneca->usoPessoal($caneca);//RETURN FALSE NOT IS POSSIBLE TO SALVE

echo '<hr>';

// OBJETO CANECA 2
// INTANCIANDO A CANECA COM UM PERFIL UNICO

$caneca2 = new Caneca;
$caneca2->cor = 'Azul';
$caneca2->corSecundaria = 'Branca';
$caneca2->tamanho = 'P';
$caneca2->conteudoInterno = false;
$caneca2->temperaturaQuente = false;

//METODO VENDER(): RETORNA SE É POSSIVE OU NÃO VENDER A CANECA BASEADO NOS VALORES QUE FORAM INTANCIADOS ATRAVES DA CLASSE CANECA PARA O OBJETO CANECA2
$caneca2->vender($caneca2);//RETURN THAT IS POSSIBLE O SALE THIS PRODUCT
print_r($caneca2);
//METODO USOPESSOAL(): RETORNA SE ESTE OBJETO É POSSIVEL SER FEITO O USO PESSOAL DELE POIS JÁ FOI UTILIZADO ANTES, ASSIM SENDO IMPOSSIVEL VENDE-LO
$caneca2->usoPessoal($caneca2);// RETURN ABOUT IF IS POSSIBLE OR NO TO USE PROFILE THIS PRODUCT
print_r($caneca2);

echo '<hr>';

// CLASSE NODEJS
require_once 'NodeJs.php';

$nodejs = new NodeJs;
$nodejs->escalabilidade = true;
$nodejs->opensource = true;
$nodejs->novaTecnologia = true;
$nodejs->frameworkFamoso = true;


//METODO ANALISEDEINOCAO(): PARA ANALISE DE INOVAÇÃO DO FRAMEWORK, IRÁ INSTANCIAR O OBJETO NODEJS A PARTIR DA CLASSE NODEJS E FAZER A ANALISE ATRAVE DOS ATRIBUTOS SETADOS NA CRIAÇÃO DO OBJETO.
$nodejs->analiseDeInovação($nodejs);//
echo '<br>';
print_r($nodejs);

?>


</body>
</html>
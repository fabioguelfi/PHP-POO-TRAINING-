<?php


class Caneca
{

    // ATRIBUTOS
    var $cor;
    var $corSecundaria;
    var $tamanho;
    var $conteudoInterno;
    var $temperaturaQuente;

    // METODOS
    function vender()
    {
        if ($this->conteudoInterno == true) {
            echo '<p>Não vender caneca já utilizada</p>';
        } else {
            echo '<p>Vender caneca nova</p>';
        }
    }

    function usoPessoal()
    {
        if ($this->temperaturaQuente == false and $this->conteudoInterno == false) {
            echo '<p>Caneca nunca utilizada antes, é possivel vende-la</p>';
        } else {
            echo '<p>Caneca já utilizada, impossivel vende-la</p>';
        }
    }

};
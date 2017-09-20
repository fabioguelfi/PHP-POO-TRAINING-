<?php

class Caneta
{
    //ATRIBUTOS
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //METODOS
    function rabiscar()
    {
        if ($this->tampada == true) {
            echo '<p>nao posso rabiscar</p>';
        } else {
            echo '<p>posso rabiscar</p>';
        }
    }

    function tampar()
    {
        $this->tampada = true;
        echo '<p>Caneta Tampada</p>';

    }

    function destampar()
    {
        $this->tampada = false;
        echo '<p>Caneta Destampada</p>';
    }

}
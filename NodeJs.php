<?php

class NodeJs{
    //ATRIBUTOS
    var $escalabilidade;
    var $opensource;
    var $novaTecnologia;
    var $frameworkFamoso;

    //METODOS

    function analiseDeInovação(){
        if ($this->escalabilidade = true and $this->frameworkFamoso = true){
            echo 'Este Framework me parece algo inovador!';
        } else {
            echo 'Este Framework me parece não atender os requisitos de inovação';
        }
    }

}
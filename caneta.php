<?php

class caneta {
var $modelo;
var $cor;
var $ponta;
var $carga;
var $tampada;

function rabiscar () {
    if ($this->tampada == true){
        echo "<p>ERRO! NÂO POSSO RASBICAR!</p>";
    }
    
    else {
        echo "<p>ESTOU RASBISCANDO...</p>";
    
    }
}

function tampar() {
   $this->tampada = true;


}

function destampar(){
     $this->tampada = false;

}



}

?>
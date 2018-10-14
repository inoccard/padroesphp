<?php
include_once('IAbstract.php');

class southRegion extends IAbstract
{
    # Deve retornar um valor decimal 
    protected function giveCost()
    {
        $novoValor = 3;
        $this->valueNow = 210.54 / $novoValor;
        return $this->valueNow;
    }
    # Deve retornar uma string
    protected function giveCity()
    {
        return "Luanda minha CIDADE";
    }
}

?>
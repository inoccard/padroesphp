<?php
include_once('IAbstract.php');

class southRegion extends IAbstract
{
    // Deve retornar um valor decimal 
    protected function giveCost()
    {
        $novoValor = 4;
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
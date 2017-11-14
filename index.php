<?php

class operacao
{
	public $resultado;
	public $operacao;

	public function soma($x,$y,$operacao)
	{
		$this->resultado=$x+$y;
		$this->operacao="soma";
	}
	public function getResultado()
	{
		return 'O resultado da '.$this->operacao.' é '.$this->resultado.'.';
	}
}

$teste=new operacao();
$teste->soma(1,2,"soma");
echo $teste->getResultado();
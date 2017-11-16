<?php

class operacao
{
	public $resultado;
	public $operacao;

	public function soma($x,$y,$sinal)
	{
		if($sinal==1) 
			{
				$this->resultado=$x+$y;
				$this->operacao="soma";	
			}
		elseif($sinal==2) 
			{
				$this->resultado=$x-$y;
				$this->operacao="subtração";						
			}	
		elseif($sinal==3) 
			{
				$this->resultado=$x*$y;
				$this->operacao="multiplicação";					
			}			
		elseif($sinal==4) 
			{
				$this->resultado=$x/$y;
				$this->operacao="divisão";	
				
			}


	}
	public function getResultado()
	{
		return 'O resultado da '.$this->operacao.' é '.$this->resultado.'.';
	}
}

$teste=new operacao();
$teste->soma($_GET['x'],$_GET['y'],$_GET['sinal']);
echo $teste->getResultado();


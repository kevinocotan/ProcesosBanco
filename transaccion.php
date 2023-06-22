<?php

require_once('banco.php');

class Transaccion extends Banco {
    private $cantidad;

    function __construct($cuenta, $monto, $cantidad ) {
        parent::__construct ($cuenta, $monto);
        $this-> cantidad = $cantidad;
    }

    function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}

	function getCantidad() {
		return $this->cantidad;
	}
    
    // Deposito
	function deposito() {
		$total = $this->getMonto() + $this->getCantidad();
		echo "Su deposito fue de: $".$this->getCantidad(). "<br>";
	    echo "El monto actual es de: $".$total ."<br>";	
	}

    // Retiro
	function retiro() {
		if ($this->getMonto() >= $this->getCantidad()) {
			$total = $this->getMonto() - $this->getCantidad();
			echo "Su retiro fue de: $".$this->getCantidad(). "<br>";
			echo "El monto actual es de: $".$total ."<br>";	
		} else {
			echo "ERROR. El monto no debe ser menor al retiro. ";
		}		
	}
}

?>
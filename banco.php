<?php
class Banco {
    private $numerocuenta;
    private $monto;

    public function Banco ($cuenta, $monto) {
        echo "<br> Datos de la cuenta: <br>";
        echo "<br>";
        $this-> cuenta = $cuenta;
        $this-> monto = $monto;
    }

    public function setCuenta ($cuenta) {
        $this-> cuenta = $cuenta;
    }

    public function getCuenta () {
        return $this-> cuenta;
    } 

    public function setMonto ($monto) {
        $this-> monto = $monto;
    }

    public function getMonto () {
        return $this-> monto;
    } 

}

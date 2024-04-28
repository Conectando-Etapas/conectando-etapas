<?php
class imagen{

    var $ID;
    var $Direccion;

    public function __construct( $ID, $Direccion ){
        $this->ID = $ID;
        $this->Direccion = $Direccion; 
    }
}
?>
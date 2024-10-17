<?php

include_once 'Producto.php'
class ProductoDigital extends Producto{
    
    public function calculaPreciofinal(){
        return $this->precio * ($this->peso*0.1);
    }

}


?>
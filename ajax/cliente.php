<?php
require_once("../config/cone.php");//accedemos a la conexion a la base de datos
require_once("../models/Cliente.php");//accedemos al modelo cliente de la base de datos

class ClienteController{
    public function mostrarClient(){
        $cliente = new Cliente();//objeto del modelo cliente
        $datos=$cliente->get_cliente();//obtenemos la funcion mostrar clientes
        return $datos;//retornamos todos los clientes
        
    }
}





?>
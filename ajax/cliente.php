<?php
require_once("../config/cone.php");//accedemos a la conexion a la base de datos
require_once("../models/Cliente.php");//accedemos al modelo cliente de la base de datos

class ClienteController{
    //funcion del controlador para mostrar todos los clientes
    public function mostrarClient(){
        $cliente = new Cliente();//objeto del modelo cliente
        $datos=$cliente->get_cliente();//obtenemos la funcion mostrar clientes
        return $datos;//retornamos todos los clientes
        
    }
    //funcion del controlador para buscar un registro en especial
    public function idCliente(){
        $cliente = new Cliente();//objeto del modelo cliente
        //$cc_nit_cliente=$_POST["cc_nit_cliente"];
        //sale un error de que la variable no esta definida pero al momento de buscar el registro lo trae
        $datos=$cliente->get_cliente_id($_POST["cc_nit_cliente"]);//obtenemos la funcion para buscar el registro
        if(is_array($datos)==true and count($datos)>0){
            echo"busqueda exitosa";
        }else{
            echo"no exite";
        }
        return $datos;//retornamos colo el cliente
    }

}





?>
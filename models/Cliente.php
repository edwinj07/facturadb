<?php
//---------------En el modelo cliente se podra realizar el CRUD como
//---------------CREAT, READ, UPDATE, DELETE------------------------ 

class Cliente extends Conexion{
    //--funcion para que muestre todos los clientes que estan en la base de datos
    public function get_cliente(){
        $conectar=parent::conexio();//variable conectar podemos acceder a la conexion a la base de datos
        parent::setname();//parent podemos acceder y ejecutar la funcion de caracteres especiales
        $sql="SELECT * FROM clientes";//sentencia SELECT*FROM para seleccionar todos los registros
        $sql=$conectar->prepare($sql);//prepara la sentencia sql para su ejecucion
        $sql->execute();//ejecuta la sentencia SQL preparada
        return $resultado=$sql->fetchAll();//retorna en array todas filas de la sentencia
    }
}
?>
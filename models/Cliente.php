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
    //--funcion para que solo muestre un solo cliente por documento
    public function get_cliente_id($cc_nit_cliente) {
        $conectar=parent::conexio();//variable conectar podemos acceder a la conexion a la base de datos
        parent::setname();//parent podemos acceder y ejecutar la funcion de caracteres especiales
        $sql="SELECT * FROM clientes WHERE cc_nit_cliente=?";//setenecia SELECT*FROM clientes WHERE selecciona solo un registro
        $sql=$conectar->prepare($sql);//prepara la sentencia para su ejecucion
        $sql->bindValue(1,$cc_nit_cliente);//vincula el valor de la sentencia WHERE cc_nit_cliente
        $sql->execute();//ejecuta la sentencia SQL y el valor marcado en bindValue
        return $resultado=$sql->fetchAll();//retorna en array sola la fila de la sentencia
    }
}
?>
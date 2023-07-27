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
        $sql->bindParam(1,$cc_nit_cliente,PDO::PARAM_INT);//vincula el valor de la sentencia WHERE cc_nit_cliente
        $sql->execute();//ejecuta la sentencia SQL y el valor marcado en bindValue
        return $resultado=$sql->fetchAll();//retorna en array sola la fila de la sentencia
    }
    //--funcion para insertar clientes 
    public function insertarClientes($nombre_cliente,$apellidos_cliente,$direccion_cliente,$cc_nit_cliente,$ciudad_cliente,$telefono_cliente){
        $conectar=parent::conexio();//variable conectar podemos acceder a la conexion a la base de datos
        parent::setname();//parent podemos acceder y ejecutar la funcion de caracteres especiales
        $sql="INSERT INTO clientes (nombre_cliente,apellidos_cliente,direccion_cliente,cc_nit_cliente,ciudad_cliente,telefono_cliente)
        VALUES (?,?,?,?,?,?)";//sentencia INSERT INTO clientes para guardar registro 
        try{
            $statem=$conectar->prepare($sql);
            $statem->bindParam(1,$nombre_cliente,PDO::PARAM_STR);
            $statem->bindParam(2,$apellidos_cliente,PDO::PARAM_STR);
            $statem->bindParam(3,$direccion_cliente,PDO::PARAM_STR);
            $statem->bindParam(4,$cc_nit_cliente,PDO::PARAM_INT);
            $statem->bindParam(5,$ciudad_cliente,PDO::PARAM_STR);
            $statem->bindParam(6,$telefono_cliente,PDO::PARAM_STR);
            $statem->execute();
        }
        catch(PDOException $e){
            // Aquí puedes manejar cualquier excepción que se produzca durante la inserción
        
       
            // Por ejemplo, puedes imprimir el mensaje de error para depuración o guardar en un registro de errores
            echo $e->getMessage();
        }   
        
        return $resultado=$statem->fetchAll();//retorna en array sola  la fila de la sentencia

    }
    public function editarClient(){

    }
}
?>
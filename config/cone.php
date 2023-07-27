<?php
//----------- clase conexion hacia la base de datos--------

class Conexion{
    protected $dbh;   

    protected function conexio(){
        //PostgreSQL
        //DB credenciales de usuario
        define('DB_HOST','localhost');
        define('DB_USER','postgres');
        define('DB_PASS','johan');
        define('DB_NAME','factura');
        try{

            $conectar=$this->dbh=new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
                return $conectar;
        }catch(Exception $e){

            //si hay algun error en la validacion de las credenciales se muestra en pantalla
            print "!!ERROR DB ||:".$e->getMessage()."<br/>";
            die();
        }
    }

    // protected function conexio(){
    //     //DB credenciales de usuario
    //     define('DB_HOST','localhost:3307');//puerto habilitado para ejecuarse localmente
    //     define('DB_USER','root');//user
    //     define('DB_PASS','');//password
    //     define('DB_NAME','dblogin');//nombre de la baes de datos
    //     try{
    //         $conectar=$this->dbh=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
    //         return $conectar;
    //     }catch(Exception $e){
    //         //si hay algun error en la validacion de las credenciales se muestra en pantalla
    //         print "!!ERROR DB ||:".$e->getMessage()."<br/>";
    //         die();
    //     }
        
    // }
    //funcion setname para los caracteres especiales
    public function setname(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }


}


//
// $myconexion = new mysqli("localhost","root","","bd_aos");
// if ( $myconexion->connect_errno) {
//     echo "fallo al conectar a MySQL: (". $myconexion->connect_errno.")" . $myconexion->connect_errnor;
//     exit;
// }
// echo $myconexion->host_info . "\n";
// echo "con el objeto creado con el nombre myconexion";

?>
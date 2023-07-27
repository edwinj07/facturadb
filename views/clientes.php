
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <ul class="me">
                <li class="h"><a class="bto" href="index.php">Menu</a></li>
                <li class="h"><a class="bto" href="clientes.php">clientes</a></li>
                <li class="h"><a class="bto" href="">facturas</a></li>
            </ul>
        </div>
    </div>
    <div>
        <h1>clientes</h1>
               
        <button class="button-41" role="button" ><a href="insertarCliente.php">Crear Cliente</a></button>

        <?php
        require_once("../ajax/cliente.php");

        $client=new ClienteController();

        $clientes=$client->mostrarClient();
        
        ?>
        <table>
            <ul class="me">
                <li class="h" ><a class="bto" href="buscarCliente.php">buscar cliente</a></li>
            </ul>
            <caption>Listado de clientes</caption>
            <tbody>
                <tr>
                    <th>nombres</th>
                    <th>apellidos</th>
                    <th>direccion</th>
                    <th>documento</th>
                    <th>ciudad</th>
                    <th>telefono</th>
                    <th>opciones</th>
                </tr>
                <?php
                //Sentencia de control foreach para interear todos los registros de la base de datos
                    foreach ($clientes as $cli){                    
                    ?>
                <tr>                   
                    <td><?php echo $cli['nombre_cliente'];?></td>
                    <td><?php echo $cli['apellidos_cliente'];?></td>
                    <td><?php echo $cli['direccion_cliente'];?></td>
                    <td><?php echo $cli['cc_nit_cliente'];?></td>
                    <td><?php echo $cli['ciudad_cliente'];?></td>
                    <td><?php echo $cli['telefono_cliente'];?></td>
                    <td><button>editar</button>
                    <button>borrar</button>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
                    
        
        
    </div>   
     
    <footer>
        <p>2023 DevCol</p>        
    </footer>
    
</body>
</html>
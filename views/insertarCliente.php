
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/formulario.css">
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
        <h1>crear clientes</h1>
               
        <form action="" method="POST">
            <?php
            require_once("../ajax/cliente.php");

            $client=new ClienteController();

            $clientes=$client->insertarCliente();
            
            ?>
            <h1>registro de clientes</h1>
            <label for="">nombres</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" placeholder="nombres cliente"><br/>
            <label for="">apellidos</label>
            <input type="text" id="apellidos_cliente" name="apellidos_cliente" placeholder="apellidos cliente"><br/>
            <label for="">direccion</label>
            <input type="text" id="direccion_cliente" name="direccion_cliente" placeholder="direccion cliente"><br/>
            <label for="">cc/nit</label>
            <input type="text" id="cc_nit_cliente" name="cc_nit_cliente" placeholder="documento cliente"><br/>
            <label for="">ciudad</label>
            <input type="text" id="ciudad_cliente" name="ciudad_cliente" placeholder="ciudad cliente"><br/>
            <label for="">telefono</label>
            <input type="text" id="telefono_cliente" name="telefono_cliente" placeholder="telefono cliente"><br/>
            <button type="">Guardar</button>

        </form>

        

        
                    
        
        
    </div>   
     
    <footer>
        <p>2023 DevCol</p>        
    </footer>
    
</body>
</html>
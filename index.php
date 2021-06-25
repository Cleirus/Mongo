<?php require 'vendor/autoload.php';
    echo("La conexion fue exitosa <br/>");
    echo("60ccee2d248cb01490a551af <br/>");
    echo("Juan <br/>");
    echo("Shoto <br/>");
    echo $_GET["nombre"]. "<br/>";
    echo $_GET["apellido"]. "<br/>";
    try {
        $client = new MongoDB\Client(
            'mongodb+srv://admindb:<condedoku>@admindb.tjyfp.mongodb.net/desarrolloweb?retryWrites=true&w=majority');
        $db = $client->desarrolloweb;
        $collection = $db->formulario;
                $document = $collection->find();
        foreach ($document as $item) {
            echo $item['id'] . '</br>';
            echo $item['nombre'] . '</br>';
            echo $item['apellido'] . '</br>';
        }
        echo "final";
            } catch (PDOException $e) {
        echo "Error connection: " . $e->getMessage();
    }

    
?>

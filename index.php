<?php require 'vendor/autoload.php';
    echo("Estos son tus datos: <br/>");
    
    echo "Tu(s) nombre(s): ". $_GET["nombre"]. "<br/>";
    echo "Tu(s) apellido(s): ". $_GET["apellido"]. "<br/>";
    try {
        $client = new MongoDB\Client('');
        $db = $client->desarrolloweb;
        $collection = $db->formulario;
                $document = $collection->find();
        foreach ($document as $item) {
            echo $item['nombre'] . '</br>';
        }
        echo "final";
            } catch (PDOException $e) {
        echo "Error connection: " . $e->getMessage();
    }

    
?>

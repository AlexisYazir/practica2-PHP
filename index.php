<?php
$resultado="";
#Esto se utiliza para verificar si la solicitud se realizo mediante el metodo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $numero = $_POST["numero"];
    $conversion = $_POST["opciones"];

    switch ($conversion) {
        case "binario":
            $resultado = decbin($numero);
            break;
        case "octal":
            $resultado = decoct($numero);
            break;
        case "hexadecimal":
            $resultado = dechex($numero);
            break;
        default:
            $resultado = "Opción no válida";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2 PHP</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            text-align: center;
            font-size:25px;
        }
        form {
            margin: 20px auto;
            width: 500px;
            background-color:#A7FCB3;
            padding:50px; 
            border-radius:10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        .dato{
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
            font-size:25px;
            border-radius:10px;
        }
        select {
            width: 74%;
            padding: 10px;
            margin-bottom: 20px;
            font-size:25px;
            border-radius:10px;
        }
        .btn {
            background-color: #41F159;
            border: none;
            padding: 10px 20px;
            border-radius:5px;
            font-size:25px;
            font-weight: 600;
        }
        span,
        h2{
            font-weight: 800;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>Conversión de números</h2>
        <label for="numero">Ingresa un número:</label>
        <input class="dato" type="number" name="numero" id="numero" required><br>
        <select name="opciones">
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select><br>
        <button type="submit"  value="Convertir" class="btn">Convertir</button><br><br>
        <label for="">El resultado de la conversión es:</label>
        <span><?php echo "$resultado"; ?></span>   
    </form>    
</body>
</html>
<?php 

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "logbook"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

  if (isset($_POST['submit'])) {

    $pmkg1 = $_POST['pesomuertomumanokg1'];

    $pmkg2 = $_POST['pesomuertorumanokg2'];

    $pms1 = $_POST['pesomuertorumanos1'];

    $pms2 = $_POST['pesomuertorumanos2'];

    //isquios//
    $cikg1 = $_POST['curlisquiokg1'];

    $cikg2 = $_POST['curlisquiokg2'];

    $cis1 = $_POST['curlsquios1'];

    $cis2 = $_POST['curlsquios2'];

    
    $sql = "INSERT INTO `piernas`(`pesomuertomumanokg1`, `pesomuertorumanokg2`, `pesomuertorumanos1`, `pesomuertorumanos2`, `curlisquiokg1`, `curlisquiokg2`, `curlsquios1`, `curlsquios2`) VALUES ('$pmkg1', '$pmkg2', '$pms1', '$pms2', '$cikg1', '$cikg2', '$cis1', '$cis2')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "logbook agregado correctamente Correctamente";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook de Entrenamiento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 10px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        h3 {
            margin-top: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        /* Estilos para los campos de entrada */
        input[type="text"], textarea {
            flex: 1;
            padding: 10px;
            border: 2px solid #007bff;
            border-radius: 8px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:hover, textarea:hover {
            border-color: #0056b3;
        }

        /* Estilos para el botón */
        button[type="submit"] {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 18px;
            }

            h3 {
                font-size: 16px;
            }

            input[type="text"], textarea {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Logbook de Entrenamiento</h1>
    <h2>Fecha: <?php echo date("Y-m-d"); ?></h2>

    <h3>Peso Muerto Rumano</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <input type="text" name="pesomuertomumanokg1" placeholder="Peso (kg)"/> 
                <input type="text" name="pesomuertorumanos1" placeholder="Repeticiones" />
            </li>
            <li>
                <input type="text" name="pesomuertorumanokg2" placeholder="Peso (kg)" />
                <input type="text" name="pesomuertorumanos2" placeholder="Repeticiones" />
            </li>
        </ul>

        <h3>Curl de Isquios</h3>
        <ul>
            <li>
                <input type="text" name="curlisquiokg1" placeholder="Peso (kg)" /> 
                <input type="text" name="curlsquios1" placeholder="Repeticiones" />
            </li>
            <li>
                <input type="text" name="curlisquiokg2" placeholder="Peso (kg)" />
                <input type="text" name="curlsquios2" placeholder="Repeticiones" />
            </li>
        </ul>

        <h3>Sentadillas Frontales</h3>
        <ul>
            <li>
                <input type="text" id="serie1" placeholder="Peso (kg)" />
                <input type="text" id="rep1" placeholder="Repeticiones" />
            </li>
            <li>
                <input type="text" id="serie2" placeholder="Peso (kg)" />
                <input type="text" id="rep2" placeholder="Repeticiones" />
            </li>
            <li>
                <input type="text" id="serie3" placeholder="Peso (kg)" />
                <input type="text" id="rep3" placeholder="Repeticiones" />
            </li>
        </ul>

        <h3>Sentadillas Búlgaras</h3>
        <ul>
            <li>
                <input type="text" id="serie1" placeholder="Peso (kg)" />
                <input type="text" id="rep1" placeholder="Repeticiones" />
            </li>
            <li>
                <input type="text" id="serie2" placeholder="Peso (kg)" />
                <input type="text" id="rep2" placeholder="Repeticiones" />
            </li>
            <!-- Puedes agregar más ejercicios aquí según sea necesario -->
        </ul>

        <h3>Notas y Observaciones</h3>
        <textarea id="notas" rows="4" placeholder="Agrega notas y observaciones aquí..."></textarea>

        <button type="submit" name="submit">Guardar</button>
    </form>
</html>

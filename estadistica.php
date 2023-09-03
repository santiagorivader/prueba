<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos de Piernas</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Tabla de Datos de Piernas</h1>
    <h2>peso muerto rumano</h2>
    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "logbook";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener datos de la tabla "piernas"
    $sql = "SELECT * FROM piernas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>kg</th><th>reps serie</th><th>kg</th><th>reps</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["pesomuertomumanokg1"] . "</td>";
            echo "<td>" . $row["pesomuertorumanos1"] . "</td>";
            echo "<td>" . $row["pesomuertorumanokg2"] . "</td>";
            echo "<td>" . $row["pesomuertorumanos2"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron datos en la tabla 'piernas'.";
    };
    ?>
    
   <h2>isquios</h2>
   <?php
    $sql = "SELECT * FROM piernas";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>kg</th><th>reps serie</th><th>kg</th><th>reps</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["curlisquiokg1"] . "</td>";
            echo "<td>" . $row["curlsquios1"] . "</td>";
            echo "<td>" . $row["curlisquiokg2"] . "</td>";
            echo "<td>" . $row["curlsquios2"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron datos en la tabla 'piernas'.";
    }

    // Cierra la conexión
    $conn->close();
    ?>
</body>
</html>

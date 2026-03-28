<?php
$host = 'db';
$user = 'tec';
$pass = 'Tec123.';
$db   = 'tec';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ancient Herbalist Scroll</title>
    <style>
        /* Estética de Pergamino Antiguo */
        body { 
            background-color: #2c241e; /* Color de mesa de madera */
            display: flex;
            justify-content: center;
            padding: 50px;
            font-family: 'Georgia', serif;
        }

        .scroll {
            background-color: #f4e4bc; /* Color base de pergamino */
            background-image: radial-gradient(#f4e4bc 70%, #e1c699 100%);
            color: #3d2b1f;
            max-width: 900px;
            padding: 60px;
            border: 15px solid #5d4037;
            border-image: url("https://www.transparenttextures.com/patterns/dark-leather.png") 30 round;
            box-shadow: 0 0 50px rgba(0,0,0,0.8), inset 0 0 100px rgba(0,0,0,0.1);
            position: relative;
        }

        /* Simulación de bordes quemados/viejos */
        .scroll::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border: 2px solid rgba(61, 43, 31, 0.2);
            margin: 10px;
            pointer-events: none;
        }

        h1 { 
            text-align: center; 
            font-variant: small-caps;
            font-size: 3.5em;
            margin-bottom: 5px;
            border-bottom: 2px solid #5d4037;
            display: inline-block;
            width: 100%;
        }

        .herbarium-header {
            text-align: center;
            font-style: italic;
            margin-bottom: 40px;
            font-size: 1.2em;
        }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
        }

        th { 
            border-bottom: 3px double #5d4037;
            padding: 15px;
            text-transform: uppercase;
            font-weight: bold;
        }

        td { 
            padding: 15px; 
            text-align: center;
            border-bottom: 1px solid rgba(93, 64, 55, 0.3);
        }

        /* Estilo de los estados */
        .status {
            padding: 3px 8px;
            border-radius: 3px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.8em;
        }
        .safe { color: #2d5a27; border: 1px solid #2d5a27; }
        .lethal { color: #8b0000; border: 1px solid #8b0000; background: rgba(139, 0, 0, 0.1); }

        .footer-note {
            margin-top: 40px;
            font-size: 0.9em;
            text-align: right;
            border-top: 1px solid #5d4037;
            padding-top: 10px;
        }
    </style>
</head>
<body>

    <div class="scroll">
        <h1>Herbarium Botanicum</h1>
        <div class="herbarium-header">Registry of Mycelium and Forest Spores</div>

        <table>
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Common Name</th>
                    <th>Scientific Nomenclature</th>
                    <th>Properties</th>
                    <th>Natural Habitat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mushrooms";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $status_class = $row["is_edible"] ? 'safe' : 'lethal';
                        $status_text = $row["is_edible"] ? 'Edible' : 'Lethal';
                        
                        echo "<tr>
                                <td>#00" . $row["id"] . "</td>
                                <td><strong>" . $row["name"] . "</strong></td>
                                <td><em>" . $row["scientific_name"] . "</em></td>
                                <td><span class='status $status_class'>$status_text</span></td>
                                <td>" . $row["habitat"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>The pages are blank...</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="footer-note">
            Archived by the Grand Maester | Port 9080 Connection Active
        </div>
    </div>

</body>
</html>
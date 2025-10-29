<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tafel van vermenigvuldiging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

                    <div>
                        <?php
                            if (isset($_POST['tafel'])) {
                                $tafel = $_POST['tafel'];

                            if (is_numeric($tafel)) {
                                $tafel = intval($tafel);
                                echo "<div class='card shadow-lg'>";
                                echo "<h2 class='card-title text-center mb-4'>Tafel van $tafel</h2>";
                                echo "<table class='table table-bordered table-striped text-center'>";
                                echo "<thead class='table-primary'><tr><th>Berekening</th><th>Resultaat</th></tr></thead><tbody>";

                                for ($i = 1; $i <= 10; $i++) {
                                    $resultaat = $tafel * $i;
                                    echo "<tr><td>$tafel × $i</td><td>$resultaat</td></tr>";
                                }

                                echo "</tbody></table>";
                            } else {
                                echo "<div class='alert alert-warning'>Gebruik cijfers, geen letters.</div>";
                            }
                        } else {
                            echo "<div class='alert alert-info'>Voer een getal in om de tafel te zien.</div>";
                        }
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>

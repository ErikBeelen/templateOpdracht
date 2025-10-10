<!DOCTYPE html>
<html lang="nl">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
    <title>Contact pagina</title> 
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Gegevens</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="row mt-3">
                <div class="col bg-light p-4 rounded">
                    <strong>Voornaam:</strong> 
                    <?= htmlspecialchars($_POST['voor_naam']); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col bg-light p-4 rounded">
                    <strong>Achternaam:</strong> 
                    <?= htmlspecialchars($_POST['laatste_naam']); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col bg-light p-4 rounded">
                    <strong>E-mailadres:</strong> 
                    <?= htmlspecialchars($_POST['e-mail']); ?>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning">
                Geen gegevens ontvangen. Vul eerst het formulier in via <a href="contact.php" class="alert-link">de contactpagina</a>.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

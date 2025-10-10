<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Pagina</title>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/header.php'; ?>
    <div class="container mt-5 mb-5">
  <h2 class="mb-4 text-center">Contact formulier</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-4">
      <form action="succes.php" method="post">
        <div class="mb-3">
          <label for="fnaam" class="form-label">Voornaam</label>
          <input type="text" class="form-control" name="voor_naam" id="fnaam" placeholder="Vul hier je voornaam in" required>
        </div>

        <div class="mb-3">
          <label for="lnaam" class="form-label">Achternaam</label>
          <input type="text" class="form-control" name="laatste_naam" id="lnaam" placeholder="Vul hier je achternaam in" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="e-mail" id="email" placeholder="Vul je e-mail in" required>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Verzenden</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
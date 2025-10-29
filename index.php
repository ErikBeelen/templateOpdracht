<!DOCTYPE html>
<html lang="en">
<head>          
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Welkom</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <h1>Tafel berekenaar</h1>
    <form action="tafel.php" method="post">
        <label for="tafel">Tafel van:</label>
        <input type="text" id="tafel" name="tafel" class="form-control">
        <br><br>
        <input type="submit" value="Verzenden" class="btn btn-primary">
    </form>
</body>
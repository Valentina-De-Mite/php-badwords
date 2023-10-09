<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form Bad World</title>
</head>
<body>


<div class="container">
    <h1>Ciao! <?php echo $greetings ?> </h1>
    <form action="censura.php" method="get">
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragrafo</label>
            <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="Scrivi qui il tuo paragrafo"
                aria-describeby="paragraphHelper">
            <small id="paragraphHelper" class="text-muted">Scrivi qui! </small>
        </div>
        <div class="mb-3">
            <label for="censura" class="form-label">Parola da ***</label>
            <input type="text" name="censura" id="censura" class="form-control" placeholder="Scrivi qui il tuo paragrafo"
                aria-describeby="censuraHelper">
            <small id="censuraHelper" class="text-muted">Scrivi qui! </small>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-danger">Resetta</button>
    </form>

</div>

</body>
</html>
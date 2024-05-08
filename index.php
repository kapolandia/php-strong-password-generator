<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-3">BOOLPASSWORD</h2>
                <form action="functions.php" method="GET">
                    <div class="form-group">
                        <label for="passwordLength">Lunghezza della password:</label>
                        <input type="number" class="form-control" id="passwordLength" name="passwordLength" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Genera</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

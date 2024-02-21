<?php
include __DIR__ . '/includes/data/data.php';
include __DIR__ . '/includes/utils/functions.php';

$psw_length = $_GET['length'] ?? NULL;
$characters = array_merge($numbers, $letters, $symbols);
$length_is_set = isset($_GET['length']);
$alert_class = 'alert-danger';
$alert_message = 'Non è stato possibile';

if (!empty($psw_length)) {
    $psw_generated = generate_password($psw_length, $characters);

    session_start();
    $_SESSION['password'] = $psw_generated;
    header('Location: password.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container py-5">
        <div class="mx-auto">
            <header class="text-center">
                <h1 class="text-secondary">Strong password generator</h1>
                <h2 class="text-white">Genera una password sicura</h2>
                <?php if ($length_is_set):?>
                    <div class="alert <?=$alert_class?>" role="alert">
                        <?=$alert_message?>
                    </div>
                <?php endif ?>

            </header>
            <main>
                <div class="card p-5 mt-5">
                    <div class="card-body">
                        <form method="get">
                            <div class="row mb-3">
                                <label for="password" class="col-sm-8 col-form-label">Lunghezza Password</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="password" name="length">
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                <button type="submit" class="btn btn-secondary">Annulla</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
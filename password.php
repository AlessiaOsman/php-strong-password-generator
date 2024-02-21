<?php
session_start();

$alert_class = 'alert-success';
$alert_message = "La tua nuova password è <strong>{$_SESSION['password']}</strong>" 

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
                <div class="alert <?= $alert_class ?>" role="alert">
                    <?= $alert_message ?>
                </div>
        </div>
    </div>
</body>

</html>
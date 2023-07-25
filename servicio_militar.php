<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Mayor o menor de edad</title>
</head>

<body>
    <?php
    // Edad del ciudadano
    $edad = 20;

    // Edad mínima para prestar servicio militar
    $edad_minima_servicio_militar = 18;

    if ($edad >= $edad_minima_servicio_militar) {
        echo "Esta persona debe prestar servicio militar.";
    } else {
        echo "Esta persona no está obligada a prestar servicio militar.";
    }
    ?>
</body>

</html>
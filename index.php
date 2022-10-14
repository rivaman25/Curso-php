<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /**
     * Método que indica el tipo de metal que debe tener una medalla a partir del resultado
     * @param {int} $posicion - Posición
     * @return {string|null} - Tipo de metal
     */
    function tipoDeMedalla(int $posicion): ?string
    {
        switch ($posicion) {
            case 1:
                return 'Oro';
            case 2:
                return 'Plata';
            case 3:
                return 'Bronce';
            default:
                return null;
        }
    }

    echo tipoDeMedalla(2);
    // Plata

    echo tipoDeMedalla(34);
    // null


    ?>

</body>

</html>
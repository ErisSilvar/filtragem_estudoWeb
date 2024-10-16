<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Filtro de soma de valores
    const FILTRO_NUMBER = array(
        'options' => array(
            'default' => 99,
            'min_range' => -20,
            'max_range' => 20
        )
    );

    $n1 = filter_input(INPUT_POST, 'n1', FILTER_VALIDATE_INT, FILTRO_NUMBER);
    $n2 = filter_input(INPUT_POST, 'n2', FILTER_VALIDATE_INT, FILTRO_NUMBER);

    if (isset($n1, $n2)) {
        if ($n1 === false || $n2 === false) {
            echo '<p>Valores inválidos</p>';
        } else {
            $soma = $n1 + $n2;

            if ($soma < -20 || $soma > 20) {
                echo '<p>A soma está fora da faixa permitida (-20 a 20)</p>';
            } else {
                echo '<p>' . $soma . '</p>';
            }
        }
    } else {
        echo '<p>Valores não definidos</p>';
    }



    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de idade</title>
</head>
<body>
    <?php
        //Filtro de idade
        const FILTRO_IDADE = array(
            'options' => array(
                'default' => 99,
                'min_range' => -20,
                'max_range' => 20
            )
            );

        $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT, FILTRO_IDADE);

        if (isset($idade)){
            if ($idade === false){
                echo '<p>Valores inválidos</p>';
            } else {
                if ($idade < -20 || $idade > 20){
                    echo '<p>Idade fora da faixa permitida (-20 a 20)</p>';
                } else {
                    echo '<p>Idade: '. $idade. '</p>';
                }

            }

        } else {
            echo '<p>Idade não definida</p>';
        }

    ?>
</body>
</html>




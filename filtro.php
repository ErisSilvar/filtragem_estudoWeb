<?php
const FILTRO_IDADE = array(
    'options' => array(
        'default' => 0,
        'min_range' => -20,
        'max_range' => 20
    )
);

if (isset($_POST['idade'])) {
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(
        INPUT_POST,
        'idade',
        FILTER_VALIDATE_INT,
        FILTRO_IDADE
    );

    if ($idade === false) {
        echo '<p>Idade inválida.</p>';
    } else {
        echo '<p>' . $idade . '</p>';
    }
}



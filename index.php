<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário idade</title>
</head>
<body>
    <main>
        <h1>Form Idade</h1>

        <form action="filtro.php" method="post">
            <label for="idade">Idade: </label>
            <input type="number" id="idade" name="idade"><br>
            <input type="submit" name="Enviar">
        </form>

        <h1>Form Somas</h1>
        <form action="processar.php" method="post">
            <label for="n1">N° 1: </label>
            <input type="number" id="n1" name="n1"><br>
            <label for="n2">N° 2: </label>
            <input type="number" id="n2" name="n2"><br>
            <input type="submit" name="Enviar">
        </form>
    </main>
</body>
</html>
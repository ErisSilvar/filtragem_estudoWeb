<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário idade</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            font-family: Arial, sans-serif;
            background-color: burlywood;
        }

        #h1_principal {
            font-size: 2em;
            margin-bottom: 20px;
            padding: 20px;
            border: 7px solid green;
            background-color: black;
        }

        .forms {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 400px;
            padding: 20px;
            border: 7px solid green;
            background-color: white;
            margin: 20px;
            background-color: black;
            color: white;
        }

        h1 {
            color: green;
        }

        .but {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <main>
        <div class="forms_principal">
            <h1 id="h1_principal">Formulário Web - Filtragem</h1>
            <div class="forms">
                <h1>Form Idade</h1>

                <form action="filtro.php" method="post">
                    <label for="idade">Idade: </label>
                    <input type="number" id="idade" name="idade"><br>
                    <br>
                    <input type="submit" class="but" name="Enviar">
                </form>

                <h1>Form Somas</h1>
                <form action="processar.php" method="post">
                    <label for="n1">N° 1: </label>
                    <input type="number" id="n1" name="n1"><br>
                    <br>
                    <label for="n2">N° 2: </label>
                    <input type="number" id="n2" name="n2"><br>
                    <br>
                    <input class="but" type="submit" name="Enviar">
                </form>
            </div>
        </div>
    </main>
</body>

</html>
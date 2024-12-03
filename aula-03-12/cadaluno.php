<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div class="container">
            <h2>Cadastro</h2>
            <form action="listaaluno.php" method="post">
                <div class="nome">
                    <input type="text" name="nome" id="nome" required placeholder="Luíz Augusto">
                </div>
                <div class="idade">
                    <input type="text" name="idade" id="idade" required placeholder="35">
                </div>
                <button id="button" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA-ALUNO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div class="header">
            <div class="div1">
                <a href="#"><img src="img/logoif.jpg" alt="" id="logoif"></a>
            </div>
            <div class="div2">
                <h1>SIS-ALUNO</h1>
            </div>
            <div class="div3">
                <a href="#  "><img src="img/logoceteia.png" alt="" id="logoceteia"></a>
            </div>
        </div>
        <div class="links">
            <button>
                <a href="index.php">Página inicial</a>
            </button>
            <button>
                <a href="cadaluno.php">Página de cadastro</a>
            </button>
        </div>
        <div class="lista">
            <table border="2">
                <tr>
                    <td>nome</td>
                    <td>estado</td>
                    <td>cidade</td>
                    <td>rua</td>
                    <td>cpf</td>
                    <td>celular</td>
                    <td>whatsApp</td>
                    <td>data de nascimento</td>
                </tr>
                <tr>
                    <td>
                        <?php echo $_POST['nome'];?>
                    </td>
                    <td>
                        <?php echo $_POST['estado'];?>
                    </td>
                    <td>
                        <?php echo $_POST['cidade'];?>
                    </td>
                    <td>
                        <?php echo $_POST['rua'];?>
                    </td>
                    <td>
                        <?php echo $_POST['cpf'];?>
                    </td>
                    <td>
                        <?php echo $_POST['celular'];?>
                    </td>
                    <td>
                        <?php echo $_POST['zap'];?>
                    </td>
                    <td>
                        <?php echo $_POST['data_nascimento'];?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <div class="div1">
                <p>Site desenvolvido por Jandilson Dias Moura - jandlsndiasmr@gmail.com - jandlsndsmoura@gmail.com</p>
            </div>
            <div class="div2">
                <a href="#"><img src="img/logojandy.png" alt="" id="logojandy"></a>
            </div>
        </div>
    </div>
</body>
</html>
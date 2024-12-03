<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=t, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="./cadaluno.php">cad-aluno</a>
        <a href="./home.php"></a>
    </nav>
    <table border="2">
        <tr>
            <th>nome</th>
            <th>idade</th>
        </tr>
        <tr>
            <td>
                <?php echo $_POST['nome'];?>
            </td>
            <td>
                <?php echo $_POST['idade'];?>
            </td>
        </tr>
    </table>
</body>
</html>
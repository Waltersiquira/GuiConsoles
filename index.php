<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiConsoles</title>
</head>
<body>
    <button><a href="form-console.php" style="text-decoration: none;">adcionar console</a></button>
    <h1>GuiConsoles</h1>
    <hr>
    <?php require_once 'includes/lojas.php' ?>
    <table>
        <?php 
        $busca = $l->query('select * from console');
        if (!$busca){
            echo 'error';
        } else {
            if ($busca->num_rows == 0){
                echo 'error';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina-console.php?i=$reg->id'><img src='$reg->imagem' width='120'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>
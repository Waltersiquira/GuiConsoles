<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiConsoles</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $n = $_POST['nome'] ?? '';
    $e = $_POST['especificacoes'] ?? '';
    $p = $_POST['preco'] ?? '';
    $i = $_POST['imagem'] ?? '';
    if (!empty($n) and !empty($e) and !empty($p) and !empty($i)){
        if ($l->query("INSERT INTO `console` (`id`, `nome`, `especificações`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$e', '$p', '$i')") == true){
            echo 'Console adcionado com sucesso';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
    ?>
</body>
</html>
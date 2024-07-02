

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<fieldset>
    <h1>Jogo de Adivinhação</h1>
    
    <?php
    session_start(); //Inicia uma sessão
 

    if (!isset($_SESSION['random_number'])) {
        $_SESSION['random_number'] = rand(1, 100); //Adiciona um valor de 1 a 100 no random_number
        $_SESSION['attempts'] = 0; //Seta o valor das tentativas como 0
    }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $guess = intval($_POST['guess']); // Aqui a variável Guess vai receber o valor digitado no formulário a partir do método post.
        $_SESSION['attempts'] += 1; //Vai adicionar +1 a quantidade de tentativas
 
        if ($guess < $_SESSION['random_number']) { // Vai checar se o valor digitado é muito abaixo do valor aleatório
            echo "<p>Seu palpite é muito baixo!</p>"; // Vai escrever que o palpite é muito baixo
        } elseif ($guess > $_SESSION['random_number']) { // Vai checar se o valor digitado é muito acima do valor aleatório
            echo "<p>Seu palpite é muito alto!</p>"; // Vai escrever que o palpite é muito acima
        } else { // Caso você digite o valor correto, irá partir para a parte de baixo
            echo "<p>Parabéns! Você acertou o número {$_SESSION['random_number']} em {$_SESSION['attempts']} tentativas.</p>"; //Vai escrever que você acertou
            // Reinicia o jogo
            unset($_SESSION['random_number']); //Vai tirar o valor da váriavel de valores aleatórios
            unset($_SESSION['attempts']); //Vai tirar o valor das tentativas e deixar como 0
        }
    }
    ?>
 

    <form method="post" action="">
        <label for="guess">Digite seu palpite (1-100):</label>
        <input type="number" id="guess" name="guess" min="1" max="100" required>
        <button type="submit">Enviar</button>
</fieldset>
    </form>
</body>
</html>


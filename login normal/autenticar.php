<!DOCTYPE html>
<?php
    $conexao = mysqli_connect ("localhost", "root", ""); // Aqui você insira o nome da host, o nome de usuário e depois a senha que é vazia.
    mysqli_select_db ($conexao, "tutocrudphp"); // Seleciona o banco de dados chamado 'tutocrudphp'.
    session_start(); // Inicia a sessão para que as variáveis de sessão possam ser acessadas.
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title> <!-- O texto vai aparecer na aba do navegador. -->
        <script language="javascript">

            function sucesso() {
                setTimeout("window.location='index.php'", 4000); // Se o login for bem-sucedido, vai redirecionar o usuário para outra página.

            }
            function failed() {
                setTimeout("window.location='login.html'", 4000); // Se o login falhar, o usuário tentara novamente.
            }
        </script>
    </head>
    <body>
        <?php
            $user = $_POST["user"]; // Você preenchera o nome do usuário.
            $pass = $_POST["pass"]; // Você preenchera a senha.

            $consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass'") or die (mysqli_error($conexao)); 
            // Vai executa o SELECT na tabela "usuarios" do banco de dados, procurando por uma linha onde o nome de usuário (usuario) e a senha (senha) correspondam aos valores fornecidos.
            $linhas = mysqli_num_rows($consulta); // Determina o número de linhas retornadas por uma consulta SQL executada anteriormente.

            if($linhas == 0) { // Aqui você será movido para a página de login caso o nome de usuário e a senha estiver incorreta.
                echo "O login falhou. Você sera redirencionado para a página de login em 4 segundos.";
                echo "<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["usuario"]=$_POST["user"]; 
                // Aqui você será movido para a página onde stá escrita a mensagem (Logado com sucesso).
                $_SESSION["senha"]=$_POST["user"];
                echo "Você foi logado com sucesso. Redirecionado em 4 segundos.";
                echo "<script language='javascript'>sucesso()</script>";
            }
        ?>
    </body>
</html>
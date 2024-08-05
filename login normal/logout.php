<?php
    session_start(); // Inicia a sessão para que as variáveis de sessão possam ser acessadas.
    session_destroy(); // Encerra a sessão atual, removendo todos os dados de sessão.
    header ("Location: login.html"); // Redireciona o usuário de volta para a página de login após o logout.
?>
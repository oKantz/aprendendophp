<?php

include_once 'db_connect.php';

include_once 'psl-config.php';

$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['p'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $error_msg .= '<p class="error">O endereço de email digitado não é válido</p>';
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);

    if (strlen($password) != 128) {

    $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1";

    $stmt = $mysqli->prepare($prep_stmt);

    if ($stmt) {

        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

    if ($stmt->num_rows == 1) {

        $error_msg .= '<p class="error">A user with this email address already exists.</p>';

    }

} else {
    $error_msg .= '<p class="error">Database error</p>';
}

}


if (empty($error_msg)) {

    $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(  16), TRUE));

    $password = hash('sha512', $password . $random_salt);

    if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")) {
        $insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt);

        if (! $insert_stmt->execute()) {

            header('Location: ../error.php?err=Registration failure: INSERT');

        }
    }

    header('Location: ./register_success.php');
    }



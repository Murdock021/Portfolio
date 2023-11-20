<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Use a função mail() do PHP para enviar o email
    $to = "diogomachadocmb@gmail.com";
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $name\nEmail: $email\nMensagem: $message";

    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>

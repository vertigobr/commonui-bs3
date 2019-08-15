<?php
if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sibbr.brasil@gmail.com";
    $email_subject = "Sugestão encaminha portal SiBBr";

    $name = $_POST['name']; // required
    $email_de = $_POST['email']; // required
    $tema = $_POST['assunto']; // not required
    $menssagem = $_POST['menssagem']; // required

    $error_message = "";

    function died($error)
    {
        // your error code can go here
        $text = '';
        $text .= "Lamentamos, mas houve erro (s) encontrado (s) com o formulário que você enviou. ";
        $text .= "Esses erros aparecem abaixo.<br /><br />";
        $text .= $error . "<br /><br />";
        $text .= "Por favor, volte e corrija esses erros.<br /><br />";

        return $text;
    }

    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['tema']) || !isset($_POST['menssagem'])) {
        header("Location: contato.php?err=Lamentamos, mas parece haver um problema com o formulário que você enviou.");
    }

    if (!preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/', $email_de)) {
        $error_message .= 'O endereço de e-mail digitado não parece ser válido.<br />';
    }

    if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $error_message .= 'O nome que você inseriu não parece ser válido.<br />';
    }

    if (strlen($menssagem) < 2) {
        $error_message .= 'A menssagem que você digitou não parece ser válida.<br />';
    }

    if (strlen($error_message) > 0) {
        header("Location: contato.php?err=" . died($error_message));
    }

    function limpar($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message = "Detalhes da mensagem.\n\n";
    $email_message .= "Nome: " . limpar($name) . "\nEmail: " . limpar($email_de) . "\nAssunto: " . limpar($tema) . "\nMenssagem: " . limpar($menssagem) . "\n";

    // montar header
    $headers = 'From: ' . $email_de . "\r\n Reply-To: ' . $email_de . \"\r\n" . 'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    header("Location: ./envio_sucesso.php");
    exit();
}
?>
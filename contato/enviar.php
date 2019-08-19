<?php
if (isset($_POST['email'])) {

    session_start();

    $email_to = "sibbr.brasil@gmail.com";
    $email_subject = "Contato encaminhado portal LA SiBBr";

    $name = $_POST['name'];
    $email_de = $_POST['email'];
    $tema = $_POST['assunto'];
    $menssagem = $_POST['menssagem'];

    $error_message = "";

    function died($error)
    {
        $text = '';
        $text .= "Lamentamos, mas houve erro(s) encontrado(s) com o formulário que você enviou. ";
        $text .= "Esses erros aparecem abaixo.<br /><br />";
        $text .= $error . "<br /><br />";
        $text .= "Por favor, verificar se dados estão corretos.<br /><br />";

        return $text;
    }

    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['assunto']) || !isset($_POST['menssagem'])) {
        $error_message .= "Verificar se algum campo está vazio.<br/>";

    }

    if (!preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/', $email_de)) {
        $error_message .= 'O endereço de e-mail digitado não parece ser válido.<br/>';
    }

    if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $error_message .= 'O nome que você inseriu não parece ser válido.<br/>';
    }

    if (strlen($menssagem) < 2) {
        $error_message .= 'A menssagem que você digitou não parece ser válida.<br/>';
    }

    if (strlen($error_message) > 0) {
        $_SESSION['error'] = died($error_message);
        header("Location: ./contato.php");
        exit();
    }

    function limpar($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message = "Mensagem.\n\n";
    $email_message .= "Nome: " . limpar($name) . "\nEmail: " . limpar($email_de) . "\nAssunto: " . limpar($tema) . "\nMenssagem: " . limpar($menssagem) . "\n";

    $headers = 'From: ' . $email_de . "\r\n Reply-To: ' . $email_de . \"\r\n" . 'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    $_SESSION['sucesso'] = "Agrademos pela sua mensagem, retornaremos seu contato em breve";
    header("Location: ./contato.php");
    exit();
}
?>
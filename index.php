<?php

require 'classes/NewMail.php';

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envoi de mail</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="to" placeholder="Mail du destinataire">
        <input type="text" name="subject" placeholder="Votre sujet">
        <input type="text" name="message" placeholder="Votre message">
        <input type="email" name="from" placeholder="Votre mail">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $mail = new NewMail($_POST['to'], $_POST['subject'], $_POST['message'], $_POST['from']);
    $mail->sendMail();
    echo "Votre mail est envoyé avec succés";
}
else {
    echo "Une erreur est survenue";
}





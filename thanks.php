<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="containerResponseForm">
        <h1>Vous êtes :</h1>
        <ul>
            <li><span><?= $_POST['user_lastname'] ?></span></li>
            <li><span><?= $_POST['user_firstname'] ?></span></li>
            <li><span><?= $_POST['user_email'] ?></span></li>
            <li><span><?= $_POST['user_phoneNumber'] ?></span></li>
            <li><span><?= $_POST['user_equipment'] ?></span></li>
        </ul>

        <h1>C'est parti pour l'aventure de votre vie ! 😄</h1>
        <?php
        $fullMessage = ('Merci ' . $_POST['user_lastname'] . "\n" . $_POST['user_firstname'] . "\n" . ' de nous avoir contacté à propos de ' . "\n" . $_POST['user_equipment'] . "\n" . '. Un de nos conseillers vous contactera soit à l’adresse ' . "\n" . $_POST['user_email'] . "\n" . 'ou par téléphone au' . "\n" . $_POST['user_phoneNumber'] . "\n" . ' dans les plus brefs délais pour traiter votre demande : ' . "\n" . $_POST['user_message']);

        echo $fullMessage;
        ?>
    </div>

</body>

</html>
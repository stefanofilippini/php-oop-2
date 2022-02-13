<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi. -->

<?php
    require_once __DIR__ . '/classes/user.php';
    require_once __DIR__ . '/classes/userPremium.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- richiamo l'utente base -->
    <?php
        $user1 = new User('User 1', 'Nascondini', 10);
    ?>
    <h1>UTENTE NORMALE</h1>
    <h2>Nome utente: <?php echo $user1->getName()?></h2>
    <h2>Prodotto: <?php echo $user1->getProduct()?></h2>
    <h2>Prezzo: <?php echo $user1->getPrice()?>€</h2>
    
    <hr>
    <!-- richiamo l'utente premium -->
    <?php 
        $user2 = new UserPremium('User 2', 'Nascondini', 10);
    ?>
    <h1>UTENTE PREMIUM</h1>
    <h2>Nome utente: <?php echo $user2->getName()?></h2>
    <h2>Prodotto: <?php echo $user2->getProduct()?></h2>
    <h2>Sconto: <?php echo $user2->discount?>%</h2>
    <h2>Prezzo: <?php echo $user2->getDiscount()?>€</h2>
</body>
</html>
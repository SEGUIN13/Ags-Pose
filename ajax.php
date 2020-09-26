<?php
require'vendor/autoload.php';
require'config/config.php';
//echo 'Coucou';
$message = $_POST['message'];
echo $message;

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io',465))
  ->setUsername('63c2587ad6dd8b')
  ->setPassword('5cebba65943d27')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message( $_POST['sujet']))
  ->setFrom([$_POST['email']])
  ->setTo(['veronique.seguin13@orange.fr' => 'Véronique SEGUIN'])
  ->setBody($_POST['message']);
// Send the message
$result = $mailer->send($message);   

    //REQUETE INSERTION 
    $sql= 'INSERT INTO contact ( nom, prenom, telephone, email, sujet, message) 
    VALUES (?,?,?,?,?,?)';
       
       // Requête préparée pour se protéger des injections sql
        $query = $pdo->prepare($sql);
        $query->execute([$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['email'],$_POST['sujet'],$_POST['message'] ]);

    // On retourne un message au client
echo 'Votre message a bien été envoyé!';
exit;
          
       // header("Location: form.phtml");
<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
// Vérification de la validité des informations
// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);
// Insertion
$req = $bdd->prepare('INSERT INTO membre(pseudo, pass, email) VALUES(:pseudo, :pass, :email');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));
?>
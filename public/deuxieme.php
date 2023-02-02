<?php
require_once 'connect.php';

$pdo = new \PDO(DSN, USER, PASS);
//$conn = new mysqli($servername, $username, $password);


if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pseudo = htmlspecialchars($_POST['user_pseudo']);
    $message = htmlspecialchars($_POST["user_message"]);

    $errors = [];


    // nettoyage et validation des données soumises via le formulaire
    if (!isset($pseudo) || trim($pseudo) === '')
        $errors[] = "Le pseudo est obligatoire";
    if (strlen($pseudo) > 10)
        $errors[] = "Le pseudo est trop long";
    if (!isset($message) || trim($message) === '')
        $errors[] = "Le message est obligatoire";
    if (strlen($message) > 100)
        $errors[] = "Le message est trop long";

    if (empty($errors)) {


// On prépare notre requête d'insertion

    $query = 'INSERT INTO Commentaires(pseudo, message) VALUES (:pseudo, :message)';

    $statement = $pdo->prepare($query);


// On lie les valeurs saisies dans le formulaire à nos placeholders

    $statement->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);

    $statement->bindValue(':message', $message, \PDO::PARAM_STR);


    $statement->execute();

}}
?>
<script>

    alert ('Message bien reçu !');
    window.location.href = "index.php";

</script>}/*

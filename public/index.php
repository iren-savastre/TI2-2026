<?php
# public/index.php


/*
 * Front Controller de la gestion du livre d'or
 */

/*
 * Chargement des dépendances
 */
// chargement de configuration
require_once "../config.php";
// chargement du modèle de la table guestbook
require_once URL_BASE . "/model/guestbookModel.php";

/*
 * Connexion à la base de données en utilisant PDO
 * Avec un try catch pour gérer les erreurs de connexion
 * Utilisez les constantes de config.php
 * Activez le mode d'erreur de PDO à Exception et
 * le mode fetch à tableau associatif
 */


/*
 * Si le formulaire a été soumis
 */
$message_erreur = "";
$message_succes = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // on appelle la fonction d'insertion dans la DB (addGuestbook())
    $firstname = $_POST['firstname'] ?? "";
    $lastname = $_POST['lastname'] ?? "";
    $usermail = $_POST['usermail'] ?? "";
    $phone = $_POST['phone'] ?? "";
    $postcode = $_POST['postcode'] ?? "";
    $message = $_POST['message'] ?? "";
    
    $result = addGuestbook($db, $firstname, $lastname, $usermail, $phone, $postcode, $message);
// on appelle la fonction d'insertion dans la DB (addGuestbook())

// si l'insertion a réussi
 if ($result) {
// on redirige vers la page actuelle (ou on affiche un message de succès)

// sinon, on affiche un message d'erreur

try {
    $db = new PDO(
        dsn:      MARIA_DSN,
        username: DB_CONNECT_USER,
        password: DB_CONNECT_PWD,
        options: [
            // Affiche les erreurs SQL clairement (indispensable en développement)
            PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
/*
 * On récupère les messages du livre d'or
 */

// on appelle la fonction de récupération de la DB (getAllGuestbook())

/*********************
 * Ou Bonus Pagination
 *********************/

// on vérifie sur quelle page on est (et que c'est un string qui contient que des numériques sans "." ni "-" => ctype_digit) en utilisant la variable $_GET et les constantes de config.php

# on compte le nombre total de messages (SQL)

# on récupère la pagination

# pour obtenir le $offset pour les messages (calcul)

# on veut récupérer les messages de la page courante
    $messages = getGuestbookPagination($db, $page_actuelle, PAGINATION_NB);
} else {
    $messages = [];
}

/**************************
 * Fin du Bonus Pagination
 **************************/

// Appel de la vue

include URL_BASE . "/view/guestbookView.php";

// fermeture de la connexion (bonne pratique)
$db = null;
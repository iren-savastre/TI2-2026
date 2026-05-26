<?php
# view/guestbookView.php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI2 | Livre d'or</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <nav>
<h1>TI2 | Livre d'or</h1>
 <p>Laissez une trace de votre passage !</p>
 <div id="logo">
            <img src="/public/img/logoCF2M.png" alt="Logo CF2m">
        </div>
        <div class="admini">
            <p>Administration</p>
           
        </div>
</nav>
<!-- Formulaire d'ajout d'un message -->
 <main>

<form id="formulaire" class="contact-form" action="#" method="post">
        <label for="nom">Nom</label>
        <input id="nom" name="nom" placeholder="Ex: Irina" required>

         <label for="prenom">Prénom</label>
         <input type="prenom" name="prenom" placeholder="Ex: Irina">
       
         <label for="email">E-mail</label>
        <input id="email" name="email" placeholder="irina.savastre@example.com" required>
        <p class="erreur-message" id="error-mail"></p>
        
        <label for="post">Code Postal</label>
        <input id="post" name="post" placeholder="Ex: 1000" required>
        <p class="erreur-message" id="error-post"></p>
       
        <label for="telephone">Téléphone</label>
        <input id="telephone" name="telephone" placeholder="+32423 45 67 89" required>
        <p class="erreur-message" id="error-phone"></p>

        <label for="message">Message</label>
        <input type="message" name="message" rows="6" placeholder="Un petit mot...">
        <p>0/300 caractères</p>
       
        <input id="stockage" type="checkbox" id="consentement" required>   
         <label for="consentement">J'accepte le stockage de mes données personnelles.</label>
        

         
        <button type="submit">Envoyer le message</button>
    </form>

    <div id="welcome" class="auth-box">
    <h2>Bienvenue 🎉</h2>
    <p id="welcomeMsg">Connexion réussie !</p>
    <button class="logout" id="logoutBtn">Se déconnecter</button>
</div>

<!-- Si pas de message -->
<!-- <h3>Pas encore de message</h3> -->
<!-- Si 1 message -->
<!-- <h3>Il y a 1 message</h3> -->
<!-- Si plusieurs messages -->
<!-- <h3>Il y a X messages</h3> -->

<!-- Pagination (BONUS) -->

<!-- Liste des messages -->
<ul>
    <li>
        <p><strong>firstname lastname</strong></p>
        <p><em>datemessage</em></p>
        <p>message</p>
    </li>
    <!-- Autres messages -->
    <li>
        <p><strong>firstname lastname</strong></p>
        <p><em>datemessage</em></p>
        <p>message</p>
    </li>
</ul>
etc ...
<!-- Pagination (BONUS) -->
<?php
// À commenter quand on a fini de tester
echo "<h3>Nos var_dump() pour le débugage</h3>";
echo '<p>$_POST</p>';
var_dump($_POST);
echo '<p>$_GET</p>';
var_dump($_GET);
?>

<script src="js/validation.js"></script>
<script src="script.js"></script>
</main>
</body>
</html>


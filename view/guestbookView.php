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
    
<nav class="navbar">

    <div class="nav-left">
        <img src="/public/img/logoCF2M.png" alt="Logo CF2m">
    </div>

    <div class="nav-center">
        <h1>TI2 | Livre d'or</h1>
        <p>Laissez une trace de votre passage !</p>
    </div>

    <div class="nav-right">
        <p>Administration</p>
        
    </div>
    
    <div>
          <button class="btn" id="dark-btn"> 🌙Dark Mode</button>
    </div>
    

</nav>

<!-- Formulaire d'ajout d'un message -->
 <main>
<form id="formulaire" class="contact-form" method="post">

    <div class="form-group">
        <label for="nom">Nom</label>
        <input id="nom" name="nom" type="text" placeholder="Ex: Savastre" required>
    </div>

    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input id="prenom" name="prenom" type="text" placeholder="Ex: Irina" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" placeholder="irina@example.com" required>
        <p class="erreur-message" id="error-mail"></p>
    </div>

    <div class="form-group">
        <label for="post">Code Postal</label>
        <input id="post" name="post" type="text" placeholder="Ex: 1000" required>
        <p class="erreur-message" id="error-post"></p>
    </div>

    <div class="form-group">
        <label for="telephone">Téléphone</label>
        <input id="telephone" name="telephone" type="text" placeholder="+32 470 12 34 56" required>
        <p class="erreur-message" id="error-phone"></p>
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" maxlength="300" placeholder="Un petit mot..." required></textarea>
        <p id="message-counter">0/300 caractères</p>
    </div>

    <div class="form-group checkbox">
        <input id="stockage" type="checkbox" required>
        <label for="stockage">J'accepte le stockage de mes données personnelles.</label>
    </div>

    <button type="submit" class="btn-submit">Envoyer le message</button>

</form>

    <div id="welcome" class="auth-box">
    <h2>Bienvenue 🎉</h2>
    <p id="welcomeMsg">Connexion réussie !</p>
    
</div>

<!-- Si pas de message -->
<!-- <h3>Pas encore de message</h3> -->
<!-- Si 1 message -->
<!-- <h3>Il y a 1 message</h3> -->
<!-- Si plusieurs messages -->
<!-- <h3>Il y a X messages</h3> -->

<!-- Pagination (BONUS) -->

<!-- Liste des messages -->
 <div  class="messages">
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
</div>
<br>
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


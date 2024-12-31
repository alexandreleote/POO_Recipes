<?php
    /* Require needed */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <title><?= $titre ?> | LeLS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    
</head>
<body>
    <header role="banner">
        <nav role="navigation" aria-label="Menu principal" class="navbar">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?action=listRecipes">Recettes</a></li>
                <li><a href="index.php?action=listIngredients">Ingrédients</a></li>
            </ul>
        </nav>     
    </header>

    <main role="main" class="main-container">
        <?= $contenu ?>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>À propos</h3>
                <p>Love to eat, love to share - LeLS est une plateforme de partage de recettes culinaires.</p>
            </div>
            
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul class="footer-links">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?action=listRecipes">Recettes</a></li>
                    <li><a href="index.php?action=listIngredients">Ingrédients</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Légal</h3>
                <ul class="footer-links">
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Conditions d'utilisation</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> LeLS. Tous droits réservés.</p>
        </div>
    </footer>

    <script type="module" src="./public/js/index.js"></script>
</body>
</html>
<?php
ob_start();
?>

<section class="hero">
    <h2>Bienvenue sur LeLS, la plateforme de partage de recettes culinaires !</h2>
    
    <div class="recipes-container">
        <?php 
            if (is_array($recipes)) {
            foreach($recipes as $recipe) { ?>
                <div class="recipe-card">
                    <a href="index.php?action=recipe&id=<?= $recipe["id_recipes"] ?>" class="recipe-link">
                        <div class="recipe-info">
                            <p class="recipe-type"><?= $recipe["recipeType"] ?></p>
                        </div>
                        <h2 class="recipe-title"><?= $recipe["recipeName"] ?></h2>
                        <p class="recipe-time"><i class="fa-regular fa-clock"></i> <?= $recipe["recipeTime"] ?> min</p>
                        <p class="recipe-description"><?= $recipe["recipeDescription"] ?></p>
                        <div class="recipe-ingredients">
                            <h3>Ingrédients</h3>
                            <div class="ingredients-list">
                                <?php foreach(explode(",", $recipe["ingredients"]) as $ingredient) { ?>
                                    <div class="ingredient-item"><?= trim($ingredient) ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                </div>
        <?php }
            } else {
                echo "No recipes found or invalid recipe data";
            }
        ?>
    </div>  
</section>

<?php
$metaDescription = "LeLS - Partageons nos plats culinaires";
$titre = "Bienvenue";
$contenu = ob_get_clean();
require "layout.php";
?>
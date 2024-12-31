<?php

namespace Controller;
use Model\RecipesManager;

class RecipesController {

    public function recipesList() {
        $recipesManager = new RecipesManager();
        $recipes = $recipesManager->getRecipes();

        require "view/recipes/recipesList.php";
    }
}

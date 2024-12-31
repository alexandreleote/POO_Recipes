<?php

namespace Controller;
use Model\Connect;
use Model\IngredientsManager;

class IngredientsController {
 
    public function ingredientsList() {
        $ingredientsManager = new IngredientsManager();
        $ingredients = $ingredientsManager->getIngredients();
        require "view/ingredients/ingredientsList.php";
    }
}
<?php

use Controller\HomeController;
use Controller\RecipesController;
use Controller\IngredientsController;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ctrlHome = new HomeController();
$ctrlRecipes = new RecipesController();
$ctrlIngredients = new IngredientsController();

$id = (isset($_GET["id"])) ? $_GET["id"] : null;

if(isset($_GET["action"])) {
    switch($_GET["action"]) {
        case "recipesList" : $ctrlRecipes->recipesList(); break;
     
        case "ingredientsList" : $ctrlIngredients->ingredientsList(); break;
    
    }
} else {
    $ctrlHome->index();
}
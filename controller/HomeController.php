<?php

namespace Controller;
use Model\Connect;
use Model\RecipesManager; 

class HomeController {

    public function index() {
        $recipesManager = new RecipesManager();
        $recipes = $recipesManager->findAll(); 
    
        require "view/home.php";
    }
}
<?php

namespace Model;
use Model\Connect;

class HomeManager {

    public function getRecipes() {

        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare(
            "SELECT r.id_recipes,
                    r.recipeName,
                    r.recipeDescription,
                    r.recipeType,
                    r.recipeTime,
                    GROUP_CONCAT(DISTINCT i.ingredientName) AS ingredients,
                    GROUP_CONCAT(DISTINCT c.qty) AS quantities
            FROM recipes r
            LEFT JOIN contenir c ON r.id_recipes = c.recipes_id
            LEFT JOIN ingredients i ON c.ingredient_id = i.id_ingredient
            GROUP BY r.id_recipes
            ORDER BY r.recipeType"
        );
        $requete->execute();
        
        return $requete->fetch();
    }   
}
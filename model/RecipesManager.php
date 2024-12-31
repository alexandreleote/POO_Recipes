<?php

namespace Model;
use Model\Connect;
use PDO; // Add this for PDO::FETCH_ASSOC

class RecipesManager {

    public function findAll() {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare(
            "SELECT r.id_recipes,
                    r.recipeName,
                    r.recipeDescription,
                    r.recipeType,
                    r.recipeTime,
                    GROUP_CONCAT(DISTINCT 
                        CONCAT(
                            i.ingredientName, 
                            ' ', 
                            c.qty, 
                            ' ', 
                            CASE 
                                WHEN c.qty > 1 AND LOWER(COALESCE(i.ingredientUnit, '')) IN ('unit', 'slice') 
                                THEN CONCAT(COALESCE(i.ingredientUnit, ''), 's')
                                ELSE COALESCE(i.ingredientUnit, '')
                            END
                        )
                    ) AS ingredients
            FROM recipes r
            LEFT JOIN contenir c ON r.id_recipes = c.recipes_id
            LEFT JOIN ingredients i ON c.ingredient_id = i.id_ingredient
            GROUP BY r.id_recipes
            ORDER BY r.recipeType DESC"
        );
        $requete->execute();
        
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
}
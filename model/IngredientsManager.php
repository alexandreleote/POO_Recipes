<?php

namespace Model;
use Model\Connect;

class IngredientsManager {
 
    public function getIngredients() {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare(
            "SELECT * FROM ingredients"
        );
        $requete->execute();
        
        return $requete->fetchAll();
    }
}
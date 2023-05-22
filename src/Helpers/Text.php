<?php

namespace App\Helpers;

class Text
{

    public static function excerpt(string $content, int $limit = 60) // $content: est le contenu que je souhaite affiché
    {
        if (mb_strlen($content) <= $limit) { // Permet de verifier si la taille de la chaine de caractère est inferieur ou pas à la limite
            return $content;
        }
        $lastSpace = mb_strpos($content, ' ', $limit); // Donne la position d'une chaine de caractere dans notre chaine de caractère originale
        return mb_substr($content, 0, $lastSpace) . '...'; // Permet de couper le contenu en commençant à 0 et couper au dernier espace
    }
}

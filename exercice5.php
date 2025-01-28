<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

class Math {

    public static function add(float $a, float $b): float {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float {
        return $a * $b;
    }

}

$calcul1 = Math::add(5, 5);
$calcul2 = Math::subtract(5, 5);
$calcul3 = Math::multiply(5, 5);

?>

<p><?= $calcul1 ?></p>
<p><?= $calcul2 ?></p>
<p><?= $calcul3 ?></p>
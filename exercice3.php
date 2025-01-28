<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/exercice2.php";

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

class Employee extends Person {

  public function __construct(
    string $first_name,
    string $last_name,
    int $age,
    protected float $salary,
    protected string $position
  ) {
    parent::__construct($first_name, $last_name, $age);
  }

  public function afficheInfos(): void {
    echo "$this->salary €, $this->position";
  }

}

$employee = new Employee("John", "Doe", 30, 3000, "Développeur");

?>

<p><?= $employee->afficheInfos() ?></p>
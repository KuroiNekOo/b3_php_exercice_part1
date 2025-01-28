<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/exercice2.php";

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Student extends Person {

  public function __construct(
    protected array $grades = [],
    string $first_name = "John",
    string $last_name = "Doe",
    int $age = 25
  ) {
    parent::__construct($first_name, $last_name, $age);
  }

  public function getAverage(): float {
    return array_sum($this->grades) / count($this->grades);
  }

    /**
     * Get the value of grades
     */
    public function getGrades(): array
    {
        return $this->grades;
    }

    /**
     * Set the value of grades
     */
    public function setGrades(array $grades): self
    {
        $this->grades = $grades;

        return $this;
    }
}

$notes = new Student(
  [
    "Maths" => 15,
    "Français" => 12,
    "Anglais" => 18
  ],
  "Jean",
  "Dupont",
  20
);

$notes->afficheInfos();

?>

<p><?= $notes->getAverage(); ?></p>

<?php $notes->setGrades([
  "Maths" => 10,
  "Français" => 8,
  "Anglais" => 12
]) ?>

<p><?= $notes->getAverage(); ?></p>
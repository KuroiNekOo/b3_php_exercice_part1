<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Movie {

  public function __construct(
    public string $title,
    public string $genre,
    public int $ageRestriction
  ) {}

  public function canWatch(int $viewerAge): bool {
    return $viewerAge >= $this->ageRestriction;
  }

}

$film = new Movie('Toto sur la planete', 'Action', 18);

?>

<?php if ($film->canWatch(12)): ?>
  <p>Vous pouvez regarder le film</p>
<?php else: ?>
  <p>Vous ne pouvez pas regarder le film</p>
<?php endif; ?>

<?php if ($film->canWatch(19)): ?>
  <p>Vous pouvez regarder le film</p>
<?php else: ?>
  <p>Vous ne pouvez pas regarder le film</p>
<?php endif; ?>
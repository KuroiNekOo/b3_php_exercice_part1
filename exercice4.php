<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

class Article {

  public function __construct(
    protected string $title,
    protected string $content
  ) {}

  public function getSummary(int $maxLength): string {
    return substr($this->content, 0, $maxLength) . (strlen($this->content) > $maxLength ? '...' : '');
  }

}

$article = new Article('Titre de l\'article', 'Contenu de l\'article');

?>

<p><?= $article->getSummary(3) ?></p>
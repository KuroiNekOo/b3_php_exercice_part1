<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */

class ShoppingCart {

  public function __construct(
    protected array $items = [],
    protected float $total = 0
  ) {}

  public function addItem(array $item): void {
    $this->items[] = $item;
  }

  public function displayItems(): void {
    foreach ($this->items as $item) {
      echo "Item: {$item['name']} - Price: {$item['price']}<br>";
    }
  }

  public function calculateTotal(): void {
    foreach ($this->items as $item) {
      $this->total += $item['price'];
    }
    echo "Total: {$this->total}";
  }

}

$panier = new ShoppingCart();

$panier->addItem(
  [
    'name' => 'Banane',
    'price' => 1.5
  ]
);

$panier->addItem(
  [
    'name' => 'Pomme',
    'price' => 2
  ]
);

$panier->addItem(
  [
    'name' => 'Poire',
    'price' => 2.5
  ]
);

$panier->displayItems();

$panier->calculateTotal();

?>
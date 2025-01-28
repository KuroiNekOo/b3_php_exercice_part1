<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount {

  public function __construct(
    protected float $balance = 0
  ) {}

  public function deposit(float $amount): void {
    $this->balance += $amount;
    echo "Dépôt de $amount effectué. Nouveau solde: {$this->balance}<br>";
  }

  public function withdraw(float $amount): void {
    if ($this->balance >= $amount) {
      $this->balance -= $amount;
      echo "Retrait de $amount effectué. Nouveau solde: {$this->balance}<br>";
    } else {
      echo "Solde insuffisant<br>";
    }
  }

}

$account = new BankAccount(10000);
$account->deposit(500);
$account->withdraw(2000);

?>
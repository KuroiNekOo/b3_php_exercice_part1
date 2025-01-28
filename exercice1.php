<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product {

  public function __construct(
    protected string $name,
    protected float $price_without_tax,
    protected float $vat_rate
  ) {}

  public function getPriceWithVat(): float {
    return $this->price_without_tax * (1 + $this->vat_rate / 100);
  }


    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price_without_tax
     */
    public function getPriceWithoutTax(): float
    {
        return $this->price_without_tax;
    }

    /**
     * Set the value of price_without_tax
     */
    public function setPriceWithoutTax(float $price_without_tax): self
    {
        $this->price_without_tax = $price_without_tax;

        return $this;
    }

    /**
     * Get the value of vat_rate
     */
    public function getVatRate(): float
    {
        return $this->vat_rate;
    }

    /**
     * Set the value of vat_rate
     */
    public function setVatRate(float $vat_rate): self
    {
        $this->vat_rate = $vat_rate;

        return $this;
    }
}

$product = new Product('T-shirt', 20, 20);
// echo $product->getPriceWithVat();

?>
<p>Nom : <?= $product->getName() ?></p>
<p>Prix : <?= $product->getPriceWithoutTax() ?> euros</p>
<p>Taxe : <?= $product->getVatRate() ?>%</p>
<p>Prix + Taxe (%) : <?= $product->getPriceWithVat() ?> euros</p>
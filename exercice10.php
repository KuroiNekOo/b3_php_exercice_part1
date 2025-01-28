<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */

class Statistics {

  public function __construct(
    protected array $numbers = []
  ) {}

  /**
   * Calcule la somme d'un tableau de nombres
   */
  public function getSum(): float
  {
      $sum = 0;
      foreach ($this->numbers as $number) {
          $sum += $number;
      }
      return $sum;
  }

/**
 * Calcule la moyenne d'un tableau de nombres
 */
  public function getAverage(): float
  {
      if (count($this->numbers) === 0) {
          return 0;
      }
      return getSum($this->numbers) / count($this->numbers);
  }

  /**
   * Trouve la valeur minimale d'un tableau de nombres
   */
  function getMin(): float
  {
      if (count($this->numbers) === 0) {
          return 0;
      }
      $min = $this->numbers[0];
      foreach ($this->numbers as $number) {
          if ($number < $min) {
              $min = $number;
          }
      }
      return $min;
  }

  /**
   * Trouve la valeur maximale d'un tableau de nombres
   */
  function getMax(): float
  {
      if (count($this->numbers) === 0) {
          return 0;
      }
      $max = $this->numbers[0];
      foreach ($this->numbers as $number) {
          if ($number > $max) {
              $max = $number;
          }
      }
      return $max;
  }

    /**
     * Get the value of numbers
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }

    /**
     * Set the value of numbers
     */
    public function setNumbers(array $numbers): self
    {
        $this->numbers = $numbers;

        return $this;
    }
  
}

$numbers = [10, 5, 8, 20, 3, 15];
$numbers1 = new Statistics([10, 5, 8, 20, 3, 15]);

/**
 * Calcule la somme d'un tableau de nombres
 */
function getSum(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

/**
 * Calcule la moyenne d'un tableau de nombres
 */
function getAverage(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    return getSum($numbers) / count($numbers);
}

/**
 * Trouve la valeur minimale d'un tableau de nombres
 */
function getMin(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $min = $numbers[0];
    foreach ($numbers as $number) {
        if ($number < $min) {
            $min = $number;
        }
    }
    return $min;
}

/**
 * Trouve la valeur maximale d'un tableau de nombres
 */
function getMax(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

// Exemple d’utilisation
echo "<h3>Sans la classe Statistics :</h3>";
echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . getSum($numbers) . "<br>";
echo "Moyenne : " . getAverage($numbers) . "<br>";
echo "Valeur minimale : " . getMin($numbers) . "<br>";
echo "Valeur maximale : " . getMax($numbers) . "<br>";

// Exemple d’utilisation avec la classe Statistics
echo "<br>";
echo "<h3>Avec la classe Statistics :</h3>";
echo "Tableau de nombres : " . implode(", ", $numbers1->getNumbers()) . "<br>";
echo "Somme : " . $numbers1->getSum() . "<br>";
echo "Moyenne : " . $numbers1->getAverage() . "<br>";
echo "Valeur minimale : " . $numbers1->getMin() . "<br>";
echo "Valeur maximale : " . $numbers1->getMax() . "<br>";
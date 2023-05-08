Encapsulation
- bundles data it hides internal representation or state of the object and protect the integrity
- nothing can change unless explicitly allowed

Abstraction
- Goes hand in hand in encapsulation
- Internal implementation is hidden from the user

Difference:
- Encapsulation hides internal state while abstraction hides actual implementation

Example:
===========================================
<?php
class Transaction
{
  private float $amount;
  
  public function __construct(float $amount)
  {
    $this->amount = $amount;
  }
  
  public function process()
  {
    return 'Processing $' . $this->amount . ' transaction.';
  }
  
  //Accessor or Getter Method
  public function getAmount(): float
  {
    return $this->amount;
  }
  
  //Mutator or Setter Method Must be Optional if state is passed in constructor
  public function setAmount(float $amount): float
  {
    $this->amount = $amount;
  }
}

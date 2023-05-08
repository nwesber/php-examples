Interface:
===========================================
- All the methods declared in the interface MUST be used and public.
- You could only extends a single class but can implement multiple interface.
- Extend keyword can use in inheritance
- You can not have properties in interface but can have constant
- Constants in the interface cannot be overridden
- Like a contract

Polymorphism
===========================================
- Many forms
- Can pass multiple forms of checks
- Can have multiple interfaces and abstracts
- An object can have multiple instance of checks

Difference between Abstract Class and Interface
===========================================
Abstract
- can contain method implementations
- can contain properties
- can have private and protected methods
- class can only extend a single class

Interface
- can only contain method definition
- can only contain methods & constants
- can only contain public methods
- class can implement multiple interfaces

Examples:
===========================================
<?php
interface DebtCollector
{
  public function collect(float $ownedAmount): float;
}

<?php
class CollectionAgency implements DebtCollector
{
  public function collect(float $ownedAmount): float
  {
    $guaranteed = $ownedAmount * 0.5;
    return mt_rand($guaranteed, $ownedAmount);
  }
}

<?php
class AnotherCollectionAgency implements DebtCollector
{
  public function collect(float $ownedAmount): float
  {
    return $ownedAmount * 0.65;
  }
}

/* Interface as Argument */
<?php
class DebtCollectionService
{
  public function collectDebt(DebtCollector $collector)
  {
    $ownedAmount = mt_random(100, 1000);
    $collectedAmount = $collector->collect($ownedAmount);
    return 'Collected $' . $collectedAmount . ' out of $' . $ownedAmount;
  }
}

/* How to use */
<?php
$service = new DebtCollectionService();
$service->collectDebt(new CollectionAgency());
//OR
$service->collectDebt(new AnotherCollectionAgency());
  

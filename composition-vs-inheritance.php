Inheritance = IS-A Relationship
Composition = HAS-A Relationship

Checks:
1. What is the relationship? (is-a vs has-a)
2. Inherits useless methods/properties
3. Are classes substitutable?

Composition Examples:
========================================================================
<?php
class SalesTaxCalculator 
{
  public function calculateTax()
  {
    //return formula
  }
}

<?php
class Invoice 
{
  public function __construct(protected SalesTaxCalculator $salesTaxCalculator)
  {
  }
  
  public function createInvoice()
  {
  
    $salesTax = $this->calculateTax();
    //return invoice
  }
}
========================================================================
/* Design parent class with all the behaviours and methods that needed by child classes */
/* Inheritance Examples: */
<?php
abstract class NPC
{
    /* common properties */
    
    /* common methods */
}

/* create super class */
<?php
class Monster extends NPC
{
    public function attack();
    
    public function move();
}

/* Aligator is a NPC */
<?php
class Aligator extends Monster
{
    /* properties */
    /* overrides some properties */
    
    /* methods */
    /* overrides some methods */
    /* Can override attack and move function */
}

/* Dragon is a Monster */
<?php 
class Dragon extends Monster
{
    /* properties */
    /* overrides some properties */
    
    /* methods */
    /* overrides some methods */
    /* Can override attack and move function */
}


/* what if your class does not use a certain function? */
<?php
class QuestGiver extends NPC
{
    /* properties */
    /* overrides some properties */
    
    /* methods */
    /* overrides some methods */
    /* Can override attack and move function */
  
    /* Disable function */ 
    public function attack()
    {
      throw new \RuntimeException('QuestGiver can't Attack');
    }
}

========================================================================

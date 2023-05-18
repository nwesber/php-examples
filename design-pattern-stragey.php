<?php
// Strategy interface
interface PaymentStrategy
{
    public function pay($amount);
}

// Concrete strategy implementations
class CreditCardPaymentStrategy implements PaymentStrategy
{
    private $creditCardNumber;
    private $expirationDate;
    private $cvv;

    public function __construct($creditCardNumber, $expirationDate, $cvv)
    {
        $this->creditCardNumber = $creditCardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }

    public function pay($amount)
    {
        // Logic to process credit card payment
        echo "Paid $amount using credit card.";
    }
}

class PayPalPaymentStrategy implements PaymentStrategy
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function pay($amount)
    {
        // Logic to process PayPal payment
        echo "Paid $amount using PayPal.";
    }
}

// Context class
class ShoppingCart
{
    private $paymentStrategy;

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout($amount)
    {
        // Perform checkout operations

        // Use the selected payment strategy
        $this->paymentStrategy->pay($amount);
    }
}

// Usage
$shoppingCart = new ShoppingCart();

// Use CreditCardPaymentStrategy
$creditCardPayment = new CreditCardPaymentStrategy('123456789', '12/2025', '123');
$shoppingCart->setPaymentStrategy($creditCardPayment);
$shoppingCart->checkout(100);  // Output: Paid 100 using credit card.

// Use PayPalPaymentStrategy
$paypalPayment = new PayPalPaymentStrategy('test@example.com', 'password123');
$shoppingCart->setPaymentStrategy($paypalPayment);
$shoppingCart->checkout(50);  // Output: Paid 50 using PayPal.

<?php

namespace App\Services;

class PriceCalculator
{
    protected $price, $qty, $tax;
    protected $subtotal, $taxAmount, $total;

    public function __construct($price = 0, $qty = 0, $tax = 0)
    {
        $this->price = $price;
        $this->qty   = $qty;
        $this->tax   = $tax;

        $this->subtotal   = $this->price * $this->qty;
        $this->taxAmount  = ($this->subtotal * $this->tax) / 100;
        $this->total      = $this->subtotal + $this->taxAmount;
    }

    public function getSubtotal()
    {
        return $this->subtotal;
    }

    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    public function getTotal()
    {
        return $this->total;
    }
}

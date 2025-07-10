<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\PriceCalculator;
use App\Models\InvoiceLog;
use App\Events\InvoiceCreated;

class InvoiceGeneratorForm extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'client_name' => 'required',
            'email' => 'required|email',
            'item' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'tax' => 'required|numeric',
        ]);

        $quantity = $validated['quantity'];
        $price = $validated['price'];
        $tax = $validated['tax'];

        //using PriceCalculator for Price Calculation
        $calulated_price =  new PriceCalculator($price, $quantity, $tax);
        $subtotoal =  $calulated_price->getSubtotal();
        $tax_amount =  $calulated_price->getTaxAmount();
        $total_amount =  $calulated_price->getTotal();



        //calculated data added to the validated array
        $validated['subtotoal']  = $subtotoal;
        $validated['tax_amount']  = $tax_amount;
        $validated['total_amount']  = $total_amount;



        $invoice = InvoiceLog::create($validated);

        //event trigger after data store
        event(new InvoiceCreated($invoice));


        return redirect()->back()->with('success', 'Invoice generated and saved successfully!');
    }
}

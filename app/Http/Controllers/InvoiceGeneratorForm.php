<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceGeneratorForm extends Controller
{
    public function store(Request $request){

         $validated = $request->validate([
            'client_name' => 'required',
            'email' => 'required|email',
            'item' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'tax' => 'required|numeric',
        ]);

        dd($validated);
    }
}

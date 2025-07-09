<h2>Hello {{ $invoice->client_name }},</h2>

<p>Your invoice has been generated.</p>

<ul>
    <li>Item: {{ $invoice->item }}</li>
    <li>Quantity: {{ $invoice->quantity }}</li>
    <li>Price: ₹{{ $invoice->price }}</li>
    <li>Tax: {{ $invoice->tax }}%</li>
    <li>Subtotal: ₹{{ $invoice->subtotal }}</li>
    <li>Tax Amount: ₹{{ $invoice->tax_amount }}</li>
    <li><strong>Total: ₹{{ $invoice->total_amount }}</strong></li>
</ul>

<p>Thanks!</p>
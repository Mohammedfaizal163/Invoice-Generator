<?php

namespace App\Events;

use App\Models\InvoiceLog;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InvoiceCreated
{
    use Dispatchable, SerializesModels;

    public $invoice;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(InvoiceLog $invoice)
    {
        $this->invoice = $invoice;
    }
}

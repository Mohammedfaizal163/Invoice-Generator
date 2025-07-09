<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLog extends Model
{
    use HasFactory;

    protected $table = 'invoice_log'; // explicitly set table name (optional)

    protected $fillable = [
        'client_name',
        'email',
        'item',
        'description',
        'quantity',
        'price',
        'tax',
        'subtotoal',
        'tax_amount',
        'total_amount',
    ];
}

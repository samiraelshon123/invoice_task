<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'phone', 'address', 'sub_total',  'total_vat', 'final_total', 'paid_in_cash', 'change_due', 'date', 'invoice_type', 'tax_number', 'cus_tax_number'];

    public function invoice_details()
    {
        return $this->hasMany(InvoiceDetails::class, 'invoice_id', 'id');
    }
}

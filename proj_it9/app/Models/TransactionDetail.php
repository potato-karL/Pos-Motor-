<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = 'transaction_details'; // Explicitly define the table name

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'selling_price',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class, 'product_id', 'product_id');
    }
}

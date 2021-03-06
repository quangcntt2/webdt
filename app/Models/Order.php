<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $guarded =['id'];
    public function Transaction()
    {
        return $this->belongsTo(Transaction::class,'or_transaction_id','id');
    }
    public function products()
    {
        return $this->belongsTo(products::class,'or_product_id','id');
    }
}

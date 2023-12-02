<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderWaiting extends Model
{
    use HasFactory;
    protected $table = "order_waiting";
    protected $primaryKey = 'waiting_id';
    protected $fillable = [
        'order_menu','order_menu_price','delivery_or_inhouse','order_notice','is_order_finish'
    ];
}

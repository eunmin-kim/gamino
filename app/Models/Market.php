<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $table = "market";
    protected $primaryKey = 'market_id';

    protected $fillable = [
        'market_name','market_menu','market_price','is_market_online','market_location'
    ];
}

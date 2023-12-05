<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketMenu extends Model
{
    use HasFactory;

    protected $table = 'market_menu';
    protected $primaryKey = 'market_menu_id';

    protected $fillable = [
        'market_menu_name','market_menu_price'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketImg extends Model
{
    use HasFactory;

    protected $table = 'market_menu_img';
    protected $primaryKey = 'market_menu_img_id';

    protected $fillable = [
        'market_img_name','market_img'
    ];

}

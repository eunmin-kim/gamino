<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Market extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = "market";
    protected $primaryKey = 'market_id';
    protected $guarded ='market';

    protected $fillable = [
        'market_name','is_market_online','market_location','password','market_notice','market_logo_img_name','market_logo_img'
    ];
    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}

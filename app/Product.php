<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'product';

    protected $fillable = [
        'models', 'cost', 'diagonal', 'processor', 'videocard', 'memory', 'kilk', 'information', 'wallet', 'image'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    const CURRENCY_UAH = 'UAH';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';

    public static $typeCurrency = [
        self::CURRENCY_UAH, self::CURRENCY_USD, self::CURRENCY_EUR,
    ];
}

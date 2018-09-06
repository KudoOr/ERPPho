<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Food extends Authenticatable
{
    protected $table = 'foods';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description','price','category_id'
    ];
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}

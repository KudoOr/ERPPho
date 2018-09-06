<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description'
    ];
    public function foods()
    {
        return $this->hasMany('App\Food','category_id');
    }
}

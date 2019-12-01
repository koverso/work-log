<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id',
        'image_id',
        'items_name',
        'category',
        'description',
        'price',
        'region',
        'method',
        'date',
        'burden',
        'cost',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

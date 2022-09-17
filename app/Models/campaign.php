<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'from',
        'to',
        'total',
        'daily_budget',
        '_token'
    ];
    public function image(){
        return $this->hasMany(images::class)->orderBy('id');
    }
}

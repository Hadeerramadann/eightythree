<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $fillable =[
        'campaign_id',
        'name',
        
        
    ];
    public function compaign(){
        return $this->belongTo(campaign::class,'campaign_id');
    }
}

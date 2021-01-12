<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name','detail','stock','price','discount'
    ];

    public function review(){
        return $this->hasmany('App\Models\review');
    }
}

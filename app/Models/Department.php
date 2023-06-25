<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'        
    ];
    public function companies() {return $this->hasMany(Companie::class); }
    
    public function wholesaler(){return $this->hasMany(Wholesaler::class);}
}

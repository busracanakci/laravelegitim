<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yazar extends Model
{
    use HasFactory;

    /*public function scopeIsAdmin($query){
        return $query->where('isAdmin',1);
    }
    public function scopeIsActive($query){
        return $query->where('isActive',1);
    }*/

  
    public function getFullNameAttribute(){
        return "{$this->name} {$this->surname}";

    }
}

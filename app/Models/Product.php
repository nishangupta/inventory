<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getActualPriceAttribute(){
        return $this->discount ? $this->price - ($this->price * $this->discount / 100):$this->price; 
    }
}
